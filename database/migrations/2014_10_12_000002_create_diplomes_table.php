<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiplomesTable extends Migration {

    public function up() {
        Schema::create('diplomes', function (Blueprint $table) {
            
            $table->bigIncrements('diplome_id');
            $table->enum("type", ["BAC", "LIC", "MAS", "DOC"]);

            $table->bigInteger('etudiant_id')->unsigned();
            $table->foreign('etudiant_id')->references('etudiant_id')->on('etudiants');
            
            $table->year("annee_obtention");
            $table->string("academie_obtention");

            $table->string('diplome_doc');

        });
    }

    
    public function down() {
        Schema::dropIfExists('diplomes');
    }

}
