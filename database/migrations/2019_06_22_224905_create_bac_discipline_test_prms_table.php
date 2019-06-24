<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBacDisciplineTestPrmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bac_discipline_testPrms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_bac')->unsigned();
            $table->foreign('id_bac')->references('id')->on('bacs');
            $table->bigInteger('id_discipline')->unsigned();
            $table->foreign('id_discipline')->references('id')->on('disciplines');
            $table->integer('seuil');
            $table->float('note_nationale');
            $table->float('note_regionale');
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
        Schema::dropIfExists('bac_discipline_testPrms');
    }
}
