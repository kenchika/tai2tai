<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adress', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('number');
          $table->string('name');
          $table->string('city');
          $table->integer('zip_code');
          $table->string('country');
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
        Schema::dropIfExists('adress');
    }
}
