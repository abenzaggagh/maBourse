<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->bigIncrements('etudiant_id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('cin');
            $table->string('ce');
            $table->date('date_naissance');
            $table->string('lieu_naissance');
            $table->enum('sexe', ['H','F']);
            $table->string('pays_residence');
            $table->string('nationalite');
            $table->string('email');
            $table->string('telephone_1');
            $table->string('telephone_2');
            $table->enum('niveau_etude',['Baccalauréat','Licence','Master','Doctorat','Post Doctorat']);
            $table->integer('id_bac')->unsigned();
            $table->foreign('id_bac')->references('id')->on('bacs')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('etudiants');
    }
}
