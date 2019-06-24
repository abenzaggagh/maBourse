<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('intitule_discipline_fr');
            $table->string('intitule_discipline_ar');
            $table->integer('nbre_place');     
            $table->integer('id_programme')->unsigned();
            $table->foreign('id_programme')->references('id')->on('programmes')->onDelete('cascade')->onUpdate('cascade');       
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
        Schema::dropIfExists('disciplines');
    }
}
