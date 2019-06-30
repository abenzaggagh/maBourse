<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgrammesTable extends Migration {
    
    public function up() {

        Schema::create('programmes', function (Blueprint $table) {
            $table->bigIncrements('programme_id');
            
            $table->string('titre');

            $table->string('pays');
            $table->string('pays_img');

            $table->string('annee_universitaire');

            $table->enum('cycle', ["1", "2", "3"]);

            $table->longText('description');
            $table->longText('condition');

            $table->date('date_debut');
            $table->date('date_fin');

            $table->integer('places_total');

        });
    }

    
    public function down() {
        Schema::dropIfExists('programmes');
    }

}
