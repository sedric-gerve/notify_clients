<?php

namespace App\Http\Controllers;

use App\Mail\CommandeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommandeController extends Controller
{
    public function bar(){
        $user = ['email'=>'tallalando@gmail.com', 'name'=>'talla lando'];
        Mail::to($user['email'])->send(new CommandeMail($user));
        return view('emails.CommandeMails'); 
    }
}
