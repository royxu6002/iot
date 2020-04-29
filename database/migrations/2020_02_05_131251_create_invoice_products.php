<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('invoice_id');
            $table->string('currency')->nullable();
            $table->decimal('product_cost');
            $table->integer('product_quantity');
            $table->integer('product_number_per_carton')->nullable();
            $table->text('shipping_mark')->nullable();
            $table->decimal('cartons')->nullable();
            $table->decimal('cbm')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_product');
    }
}
