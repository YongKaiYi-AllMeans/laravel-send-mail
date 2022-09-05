<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendmailController extends Controller
{
    public function sendMail()
    {
        $data = ['message' => 'This is a test!'];
        Mail::to('john@example.com')->send(new TestEmail($data));
    }
}
