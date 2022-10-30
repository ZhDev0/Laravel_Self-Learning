<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail() {
        //php artisan make:mail TestMail
        $details = [
            'title' => 'Mail From Omar Zairh',
            'body' => 'This is For Testing mail using laravel',
        ];
        Mail::to('zhdevz00@gmail.com')->send(new TestMail($details));
        return 'Email Sent';
    }
}
