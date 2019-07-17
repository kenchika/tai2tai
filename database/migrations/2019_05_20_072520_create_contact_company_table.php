<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_company', function (Blueprint $table) {
          $table->unsignedBigInteger('contact_id');
          $table->foreign('contact_id')->references('id')->on('contact');
          $table->unsignedBigInteger('company_id');
          $table->foreign('company_id')->references('id')->on('company');
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
        Schema::dropIfExists('contact_company');
    }
}
