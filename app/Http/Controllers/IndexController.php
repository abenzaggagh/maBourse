<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller {
    
    // Route: /
    public function index() {
        return View('index');
    }

}
