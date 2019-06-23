<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->bigIncrements('etudiant_id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->enum('niveau_etude',['BACHELIER','LICENCIER','MASTER','DOCTORAT']);
            $table->string('nom');
            $table->string('prenom');
            $table->string('cin');
            $table->string('ce');
            $table->date('date_naissance');
            $table->string('ville_naissance');
            $table->string('pays_naissance');
            $table->enum('sexe', ['H','F']);
            $table->string('pays_residence');
            $table->string('telephone_1');
            $table->string('telephone_2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){

        $table->dropForeign('etudiants_user_id_foreign');
        $table->dropColumn('user_id');
        Schema::dropIfExists('etudiants');
    }
    
}
