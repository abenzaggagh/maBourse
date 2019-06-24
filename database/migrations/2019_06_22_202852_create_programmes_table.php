<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgrammesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programmes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('intitule_programme_fr');
            $table->string('intitule_programme_ar');
            $table->integer('nbre_bourse');
            $table->string('annee_universitaire');
            $table->timestamp('date_deb_prog');
            $table->timestamp('date_fin_prog');
            $table->text('condition')->nullable();
            $table->bigInteger('id_pays')->unsigned();
            $table->foreign('id_pays')->references('id')->on('pays');
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
        Schema::dropIfExists('programmes');
    }
}
