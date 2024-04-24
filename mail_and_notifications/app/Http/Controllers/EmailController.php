<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class EmailController extends Controller
{
    public function sendWelcomeEmail(){
        $toEmail="ombebavictor22@gmail.com";
        $mailMessage="Thankyou for everything";
        $subject='Welcome Email in Laravel using Gmail SMTP';

        $response=Mail::to($toEmail)->send(new WelcomeEmail($mailMessage,$subject));
        dd($response);
    }
}
