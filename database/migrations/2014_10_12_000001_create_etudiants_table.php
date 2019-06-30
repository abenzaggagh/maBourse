<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantsTable extends Migration {
    
    public function up() {
        
        Schema::create('etudiants', function (Blueprint $table) {

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('users');

            $table->bigIncrements('etudiant_id');
            
            $table->string('cin');
            $table->string('ce');
            
            $table->enum('niveau_etude',['BAC','LIC','MAS','DOC']);

            $table->string('nom');
            
            $table->string('prenom');

            $table->string('nom_ar')->nullable();
            $table->string('prenom_ar')->nullable();

            $table->enum('sexe', ['H','F']);
            
            $table->date('date_naissance');

            $table->string('ville_naissance');
            $table->string('pays_naissance');

            $table->string('pays_residence');
            
            $table->string('tel_1');
            $table->string('tel_2');

            $table->string('carte_identite');
            $table->string('releve_notes');
        
        });

    }

    
    public function down(){
    
        Schema::dropIfExists('etudiants');
    
    }



    
}
