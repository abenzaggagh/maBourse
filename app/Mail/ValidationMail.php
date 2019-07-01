<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ValidationMail extends Mailable
{
    use Queueable, SerializesModels;

    
    public function __construct() {
        // return $this->view('emails.validation');
    }

    public function build() {
        return $this->view('emails.validation');
    }

}
