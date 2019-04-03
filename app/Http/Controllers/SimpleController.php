<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{
    public function employee(){
    	return view('employee');
    }

    public function home(){
    	return view('home');
    }
}
