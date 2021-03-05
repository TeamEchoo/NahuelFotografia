<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store ()
    {
        $message = request()->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'message'=>'required'
        ]);

        Mail::to('ismaelcrespin18@gmail.com')->queue(new MessageReceived($message));



        return back()->with('flash', 'tu mensaje fue enviado');
    }
}
