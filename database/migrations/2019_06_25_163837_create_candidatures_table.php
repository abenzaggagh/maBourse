<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidaturesTable extends Migration {
    
    public function up()
    {
        Schema::create('candidatures', function (Blueprint $table) {
            
            $table->bigIncrements('candidature_id');

            $table->bigInteger('etudiant_id')->unsigned();
            $table->foreign('etudiant_id')->references('etudiant_id')->on('etudiants');

            $table->bigInteger('discipline_id')->unsigned();
            $table->foreign('discipline_id')->references('discipline_id')->on('disciplines');

            $table->enum('etat', ['EN_COURS', 'VALIDE', 'VERIF', 'REFUS', 'EXCLUS', 'NON_ADMIS', 'ADMIS', 'ATTENT']);
            
            $table->timestamps();

        });
    }

    public function down() {
        Schema::dropIfExists('candidatures');
    }
    
}
