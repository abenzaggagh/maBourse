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
            $table->integer('id_bac')->unsigned();
            $table->foreign('id_bac')->references('id')->on('bacs')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_discipline')->unsigned();
            $table->foreign('id_discipline')->references('id')->on('disciplines')->onDelete('cascade')->onUpdate('cascade');
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
