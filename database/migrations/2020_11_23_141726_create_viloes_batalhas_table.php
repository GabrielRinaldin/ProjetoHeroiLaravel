<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViloesBatalhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viloes_batalhas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('vilao_id');
            $table->unsignedInteger('batalha_id');

            $table->foreign('vilao_id')->references('id')->on('viloes');
            $table->foreign('batalha_id')->references('id')->on('batalhas');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viloes_batalhas');
    }
}
