<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('contractState')->nullable();
            $table->date('startingDate')->nullable();
            $table->date('signatureDate')->nullable();
            $table->date('endingDate')->nullable();
            $table->date('generationDate')->nullable();
            $table->string('type')->nullable();         //package or peer_time
            $table->string('comment')->nullable();
            $table->integer('contractAmount')->nullable();
            $table->date('payementDate')->nullable(); //package
            $table->string('payementHour')->nullable();    //peer_time
            $table->string('payementMonthly')->nullable();
            $table->string('payementDelay')->nullable();      //
            $table->string('missionType')->nullable();
            $table->string('missionDetails')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('contact_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('contact_id')->references('id')->on('contact');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contract');
    }
}
