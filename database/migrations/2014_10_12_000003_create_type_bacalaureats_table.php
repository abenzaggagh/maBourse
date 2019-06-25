<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeBacalaureatsTable extends Migration {
    
    public function up() {
        
        Schema::create('type_bacalaureats', function (Blueprint $table) {
            
            $table->increments('type_bacalaureat_id');
            
            $table->string("type");

            $table->string("bacalaureat_fr");
            $table->string("bacalaureat_ar");
            
            $table->string("mat_1_fr");
            $table->string("mat_2_fr");
            $table->string("mat_3_fr");
            $table->string("mat_1_ar");
            $table->string("mat_2_ar");
            $table->string("mat_3_ar");
        
        });

        DB::table('type_bacalaureats')->insert([
            'type' => 'SC_MATHS_A', 
            'bacalaureat_fr' => 'Sciences Maths A',
            'bacalaureat_ar' => 'علوم رياضية أ',
            'mat_1_fr' => 'Mathématiques',
            'mat_2_fr' => 'Physique Chimie',
            'mat_3_fr' => 'Sciences de la Vie et de la Terre',
            'mat_1_ar' => 'الرياضيات',
            'mat_2_ar' => 'الفيزياء و الكيمياء',
            'mat_3_ar' => 'علوم الحياة و الأرض',
        ]);
        
        DB::table('type_bacalaureats')->insert([
            'type' => 'SC_MATHS_B', 
            'bacalaureat_fr' => 'Sciences Maths B',
            'bacalaureat_ar' => 'علوم رياضية ب',
            'mat_1_fr' => 'Mathématiques',
            'mat_2_fr' => 'Physique Chimie',
            'mat_3_fr' => 'Sciences de l’Ingénieur',
            'mat_1_ar' => 'الرياضيات',
            'mat_2_ar' => 'الفيزياء و الكيمياء',
            'mat_3_ar' => 'علوم المهندس',
        ]);

        DB::table('type_bacalaureats')->insert([
            'type' => 'SC_PHYSIQUE', 
            'bacalaureat_fr' => 'Sciences Physiques et Chimiques',
            'bacalaureat_ar' => 'علوم فيزيائية',
            'mat_1_fr' => 'Mathématiques',
            'mat_2_fr' => '',
            'mat_3_fr' => '',
            'mat_1_ar' => 'الرياضيات',
            'mat_2_ar' => 'الفيزياء و الكيمياء',
            'mat_3_ar' => 'علوم الحياة و الأرض',
        ]);

        DB::table('type_bacalaureats')->insert([
            'type' => 'SC_SVT', 
            'bacalaureat_fr' => 'Sciences de la Vie et de la Terre',
            'bacalaureat_ar' => 'علوم الحياة و الارض',
            'mat_1_fr' => 'Mathématiques',
            'mat_2_fr' => 'Physique Chimie',
            'mat_3_fr' => 'Sciences de la Vie et de la Terre',
            'mat_1_ar' => 'الرياضيات',
            'mat_2_ar' => 'الفيزياء و الكيمياء',
            'mat_3_ar' => 'علوم الحياة و الأرض',
        ]);

        DB::table('type_bacalaureats')->insert([
            'type' => 'SC_ECO', 
            'bacalaureat_fr' => 'Sciences Economiques',
            'bacalaureat_ar' => 'العلوم الاقتصادية',
            'mat_1_fr' => '',
            'mat_2_fr' => '',
            'mat_3_fr' => '',
            'mat_1_ar' => '',
            'mat_2_ar' => '',
            'mat_3_ar' => '',
        ]);

        DB::table('type_bacalaureats')->insert([
            'type' => 'SC_TECH_GEST_COMP', 
            'bacalaureat_fr' => 'Techniques de Gestion et de Comptabilité',
            'bacalaureat_ar' => 'علوم التدبير المحاسباتي',
            'mat_1_fr' => 'Mathématiques',
            'mat_2_fr' => 'Economie générale et statistiques',
            'mat_3_fr' => 'Comptabilité et mathématiques financières',
            'mat_1_ar' => '',
            'mat_2_ar' => '',
            'mat_3_ar' => '',
        ]);

        DB::table('type_bacalaureats')->insert([
            'type' => 'SC_TECH_ELEC', 
            'bacalaureat_fr' => 'Sciences et Technologies Electriques',
            'bacalaureat_ar' => 'العلوم والتكنولوجيات الكهربائية',
            'mat_1_fr' => '',
            'mat_2_fr' => '',
            'mat_3_fr' => '',
            'mat_1_ar' => '',
            'mat_2_ar' => '',
            'mat_3_ar' => '',
        ]);

        DB::table('type_bacalaureats')->insert([
            'type' => 'SC_TECH_MECA', 
            'bacalaureat_fr' => 'Sciences et Technologies Electriques',
            'bacalaureat_ar' => 'العلوم والتكنولوجيات الميكانيكية',
            'mat_1_fr' => '',
            'mat_2_fr' => '',
            'mat_3_fr' => '',
            'mat_1_ar' => '',
            'mat_2_ar' => '',
            'mat_3_ar' => '',
        ]);

        DB::table('type_bacalaureats')->insert([
            'type' => 'SC_AGRO', 
            'bacalaureat_fr' => 'Sciences agronomiques',
            'bacalaureat_ar' => 'علوم زراعية',
            'mat_1_fr' => 'Mathématiques',
            'mat_2_fr' => 'Physique Chimie',
            'mat_3_fr' => 'Sciences de la Vie et de la Terre',
            'mat_1_ar' => 'الرياضيات',
            'mat_2_ar' => 'الفيزياء و الكيمياء',
            'mat_3_ar' => 'علوم الحياة و الأرض',
        ]);

        DB::table('type_bacalaureats')->insert([
            'type' => 'SC_HUM', 
            'bacalaureat_fr' => 'Sciences Humaines',
            'bacalaureat_ar' => 'العلوم الإنسانية',
            'mat_1_fr' => '',
            'mat_2_fr' => '',
            'mat_3_fr' => '',
            'mat_1_ar' => '',
            'mat_2_ar' => '',
            'mat_3_ar' => '',
        ]);

        DB::table('type_bacalaureats')->insert([
            'type' => 'FR_SC', 
            'bacalaureat_fr' => '',
            'bacalaureat_ar' => '',
            'mat_1_fr' => '',
            'mat_2_fr' => '',
            'mat_3_fr' => '',
            'mat_1_ar' => '',
            'mat_2_ar' => '',
            'mat_3_ar' => '',
        ]);

        DB::table('type_bacalaureats')->insert([
            'type' => 'FR_ECO', 
            'bacalaureat_fr' => '',
            'bacalaureat_ar' => '',
            'mat_1_fr' => '',
            'mat_2_fr' => '',
            'mat_3_fr' => '',
            'mat_1_ar' => '',
            'mat_2_ar' => '',
            'mat_3_ar' => '',
        ]);

        DB::table('type_bacalaureats')->insert([
            'type' => 'AUTRES', 
            'bacalaureat_fr' => '',
            'bacalaureat_ar' => '',
            'mat_1_fr' => '',
            'mat_2_fr' => '',
            'mat_3_fr' => '',
            'mat_1_ar' => '',
            'mat_2_ar' => '',
            'mat_3_ar' => '',
        ]);

    }

    public function down() {
        
        Schema::dropIfExists('type_bacalaureats');
    }
    
}
