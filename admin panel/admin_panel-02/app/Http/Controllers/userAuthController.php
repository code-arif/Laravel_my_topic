<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAuthController extends Controller
{
    public function showLogin(){
        return view('login');
    }
}
