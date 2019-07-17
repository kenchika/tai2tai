<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('invoiceStatus')->nullable();
            $table->string('payementStatus')->nullable();
            $table->string('days')->nullable();
            $table->string('hours')->nullable();
            $table->integer('perHours')->nullable();
            $table->integer('perDays')->nullable();
            $table->integer('supplierNumber')->nullable();
            $table->integer('companyTaxNumber')->nullable();
            $table->integer('initialAmount')->nullable();
            $table->integer('discount')->nullable();
            $table->integer('finalAmount')->nullable();
            $table->integer('invoiceNumber')->nullable();
            $table->string('paymentTerm')->nullable();
            $table->string('currency')->nullable();
            $table->string('comment')->nullable();
            $table->date('invoiceDate')->nullable();
            $table->unsignedBigInteger('contract_id')->nullable();
            $table->foreign('contract_id')->references('id')->on('contract')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice');
    }
}
