<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Mail\ValidationMail;

class MailController extends Controller {
    
    public function index() {
        return View('emails.validation');
    }


    public function home() {

        $email = "amine.benzaggagh@icloud.com";

        Mail::to($email)->send(new ValidationMail());
    }

    public function sendValidationEmail() {
        $email = "amine.benzaggagh@icloud.com";
        $object = "Mail - Laravel";
        $body = "Hi There... TEST";

        Mail::to($email)->send(new ValidationMail());
    }

}
