<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myhomeController extends Controller
{
    public function index(){
        return view('myhome');
    }
}
