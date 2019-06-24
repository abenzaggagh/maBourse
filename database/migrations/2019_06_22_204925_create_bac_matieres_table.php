<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBacMatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bac_matieres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_bac')->unsigned();
            $table->foreign('id_bac')->references('id')->on('bacs');
            $table->bigInteger('id_matiere')->unsigned();
            $table->foreign('id_matiere')->references('id')->on('matiere_principales');
            $table->float('note');
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
        Schema::dropIfExists('bac_matieres');
    }
}
