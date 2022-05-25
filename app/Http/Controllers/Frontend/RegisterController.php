<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('frontend.register.index');
    }

    public function register()
    {
        return view('frontend.register.register');
    }

    public function registerParent()
    {
        
    }

    public function completed()
    {
        return view('frontend.register.completed');
    }
}
