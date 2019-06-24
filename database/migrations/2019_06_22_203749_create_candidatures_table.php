<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_etudiant')->unsigned();
            $table->foreign('id_etudiant')->references('id')->on('etudiants')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_programme')->unsigned();
            $table->foreign('id_programme')->references('id')->on('programmes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_discipline')->unsigned();
            $table->foreign('id_discipline')->references('id')->on('disciplines')->onDelete('cascade')->onUpdate('cascade');
            $table->string('benefice_bourse');
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
        Schema::dropIfExists('condidatures');
    }
}
