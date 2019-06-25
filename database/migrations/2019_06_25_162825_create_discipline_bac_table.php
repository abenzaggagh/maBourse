<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplineBacTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('discipline_bac', function (Blueprint $table) {
            
            $table->bigInteger('discipline_id')->unsigned();
            $table->foreign('discipline_id')->references('discipline_id')->on('disciplines');

            $table->integer('type_bacalaureat_id')->unsigned();
            $table->foreign('type_bacalaureat_id')->references('type_bacalaureat_id')->on('type_bacalaureats');

            $table->double('seuil_moyenne_general', 4, 2);

            $table->double('seuil_note_1', 4, 2);
            $table->double('seuil_note_2', 4, 2);
            $table->double('seuil_note_3', 4, 2);  
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('discipline_bac');
    }
}
