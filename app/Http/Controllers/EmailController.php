<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{

    public function send()
    {
        $data = array('name' => 'EMPTY');

        Mail::send('emails.welcome', $data, function ($message)
        {

            $message->to('jompol.s@outlook.com')->subject('Hi there!  Laravel sent me!');

        });

        return response()->json(['message' => 'Request completed']);
    }



}
