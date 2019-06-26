<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplinesTable extends Migration {

    public function up() {
        
        Schema::create('disciplines', function (Blueprint $table) {
            
            $table->bigIncrements('discipline_id');

            $table->bigInteger('programme_id')->unsigned();
            $table->foreign('programme_id')->references('programme_id')->on('programmes');

            $table->string("titre");

            $table->string("nombre_places");

        });
    }

    public function down() {
        Schema::dropIfExists('disciplines');
    }

}
