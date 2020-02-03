<?php

use Illuminate\Database\Seeder;
use App\Factory;
use App\Models\Faq;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faqs = factory(Faq::class, 20)->make()->toArray();
        Faq::insert($faqs);
    }
}
