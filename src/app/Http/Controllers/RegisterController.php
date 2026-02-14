<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function step1(){
        return view('register/step1');
    }
    public function step2(){
        return view('register/step2');
    }


}
