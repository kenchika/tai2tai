<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalentContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talent_contract', function (Blueprint $table) {
          $table->unsignedBigInteger('contract_id');
          $table->foreign('contract_id')->references('id')->on('contract');
          $table->unsignedBigInteger('talent_id');
          $table->foreign('talent_id')->references('id')->on('talent');
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
        Schema::dropIfExists('talent_contract');
    }
}
