<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller {
    
    // Route: /
    public function index() {
        
        $locale = 'fr';

        app()->setLocale($locale);

        session()->put('locale', $locale);

        return View('index');
    }

    
    // Route: /land/{locale}
    public function locale(Request $request, $locale) {
        
        app()->setLocale($locale);
        session()->put('locale', $locale);

        return View('index');
    }
    
}
