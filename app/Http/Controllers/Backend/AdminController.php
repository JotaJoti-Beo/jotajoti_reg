<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Config::all();

        return view('backend.config.index', ['config' => $admin]);
    }
}
