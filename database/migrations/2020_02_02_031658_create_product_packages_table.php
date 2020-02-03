<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->decimal('product_package_length');
            $table->decimal('product_package_width');
            $table->decimal('product_package_height');
            $table->tinyInteger('product_package_item_num');
            $table->decimal('product_package_cbm');
            $table->decimal('product_package_net_weight');
            $table->decimal('product_package_gross_weight');
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
        Schema::table('product_packages', function(Blueprint $table) {
            $table->dropForeign(['product_id']);
        });
        Schema::dropIfExists('product_packages');
    }
}
