<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('invoice_issued_date');
            $table->date('invoice_due_date');
            $table->unsignedBigInteger('client_id');

            $table->string('ship_from');
            $table->string('ship_to');
            $table->string('deadline');
            $table->string('price_term');
            $table->string('payment_term');

            $table->decimal('invoice_discount')->nullable();
            $table->decimal('invoice_shipment_cost')->nullable();
            $table->decimal('invoice_total');
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
        Schema::dropIfExists('invoices');

    }
}
