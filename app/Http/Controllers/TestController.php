<?php

namespace App\Http\Controllers;


use App\Mail\TestMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class TestController extends Controllergi
{
    
    public function bar()
    {
        Mail::to('lando@yahoo.fr')->send(new TestMail());
    return view('emails.test'); 
    
    }

}
    

