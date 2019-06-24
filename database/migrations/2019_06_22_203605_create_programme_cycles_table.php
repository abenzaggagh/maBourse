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
            $table->integer('id_programme')->unsigned();
            $table->foreign('id_programme')->references('id')->on('programmes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_cycle')->unsigned();
            $table->foreign('id_cycle')->references('id')->on('cycles')->onDelete('cascade')->onUpdate('cascade');
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
