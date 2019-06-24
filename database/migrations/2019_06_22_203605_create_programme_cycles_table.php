<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgrammeCyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programme_cycles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_programme')->unsigned();
            $table->foreign('id_programme')->references('id')->on('programmes');
            $table->bigInteger('id_cycle')->unsigned();
            $table->foreign('id_cycle')->references('id')->on('cycles');
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
        Schema::dropIfExists('conditions');
    }
}
