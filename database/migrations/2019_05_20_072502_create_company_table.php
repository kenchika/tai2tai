<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('english_name');
            $table->string('chinese_name')->nullable();
            $table->string('country');
            $table->string('phone_number')->nullable();
            $table->string('tax_number')->nullable();
            $table->string('capital_number')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('adress')->nullable();
            $table->string('registration_area')->nullable();
            $table->unsignedBigInteger('contact_id')->nullable();
            $table->foreign('contact_id')->references('id')->on('contact')->onDelete('cascade');
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
        Schema::dropIfExists('company');
    }
}
