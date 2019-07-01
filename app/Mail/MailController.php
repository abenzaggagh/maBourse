<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Mail\ValidationMail;

class MailController extends Controller {
    
    public function index() {
        return View('emails.validation');
    }


    public function sendValidation(Request $request) {

        $userID = $request->session()->get('userID');

        $email = DB::table('users')->where('user_id', $userID)->first();

        Mail::to($email)->send(new ValidationMail());

    }


    public function nouvelleCandidature(Request $request) {

        $userID = $request->session()->get('userID');

        $email = DB::table('users')->where('user_id', $userID)->first();

        Mail::to($email)->send(new ValidationMail());
        
    }

}
