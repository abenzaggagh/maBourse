<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBacalaureatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('bacalaureats', function (Blueprint $table) {
            
            $table->bigIncrements('bacalaureat_id');

            $table->bigInteger('diplome_id')->unsigned();
            $table->foreign('diplome_id')->references('diplome_id')->on('diplomes');
            
            $table->integer('type_bacalaureat_id')->unsigned();
            $table->foreign('type_bacalaureat_id')->references('type_bacalaureat_id')->on('type_bacalaureats');

            $table->double('moyenne_general', 4, 2);
            $table->double('note_nationale', 4, 2);
            $table->double('note_regionale', 4, 2);

            $table->double('note_1', 4, 2);
            $table->double('note_2', 4, 2);
            $table->double('note_3', 4, 2);  


        });
    }


    public function down() {
        Schema::dropIfExists('bacalaureats');
    }
}
