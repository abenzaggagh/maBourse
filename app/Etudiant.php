<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model {

    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'etudiants';

    protected $primaryKey = 'etudiant_id';






}