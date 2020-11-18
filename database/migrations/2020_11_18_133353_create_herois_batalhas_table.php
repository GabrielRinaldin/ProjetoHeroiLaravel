<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeroisBatalhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('herois_batalhas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('heroi_id');
            $table->unsignedInteger('batalha_id');

            $table->foreign('heroi_id')->references('id')->on('herois');
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
        Schema::dropIfExists('herois_batalhas');
    }
}
