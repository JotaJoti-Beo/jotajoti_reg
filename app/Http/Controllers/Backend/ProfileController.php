<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers;

class ProfileController extends Controller
{
    public function index()
    {
        return view('backend.profile.index');
    }

    public function update()
    {
        return redirect()->back();
    }
}
