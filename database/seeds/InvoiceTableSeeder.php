<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Invoice;
use App\Models\InvoiceProduct;

class InvoicesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        Invoice::truncate();
        InvoiceProduct::truncate();

        foreach(range(1, 20) as $i) {
            $products = collect();
            foreach(range(1, mt_rand(2, 10)) as $j) {
                $price = $faker->numberBetween(100, 1000);
                $qty = $faker->numberBetween(1, 20);
                $products->push(new InvoiceProduct([
                    'name' => $faker->sentence,
                    'price' => $price,
                    'qty' => $qty,
                    'total' => ($price * $qty),
                ]));
            }
            $subTotal = $products->sum('total');
            $discount = $faker->numberBetween(10, 20);
            $grandTotal = $subTotal - $discount;

            $invoice = Invoice::create([
                'client' => $faker->name,
                'client_address' => $faker->address,
                'title' => $faker->sentence,
                'invoice_no' => $faker->numberBetween(1000, 4000),
                'invoice_date' => $faker->date(),
                'due_date' => $faker->date(),
                'discount' => $discount,
                'sub_total' => $subTotal,
                'grand_total' => $grandTotal,
            ]);

            $invoice->products()->saveMany($products);
        }
    }
}
