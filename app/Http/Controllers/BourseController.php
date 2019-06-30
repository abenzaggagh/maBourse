<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BourseController extends Controller {
    
    public function index(){
        return view('/bourse');
    }

    public function detail_programme(){
        return view('detail_programme');
    }
    
}
