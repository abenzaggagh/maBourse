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
            $table->bigInteger('etudiant_id')->unsigned();
            $table->foreign('etudiant_id')->references('etudiant_id')->on('etudiants');
            $table->bigInteger('id_programme')->unsigned();
            $table->foreign('id_programme')->references('id')->on('programmes');
            $table->bigInteger('id_discipline')->unsigned();
            $table->foreign('id_discipline')->references('id')->on('disciplines');
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
        Schema::dropIfExists('candidatures');
    }
}
