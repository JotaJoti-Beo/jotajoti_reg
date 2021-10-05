<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
        $config = Config::all();

        return view('backend.config.index', ['config' => $config]);
    }

    public function edit()
    {
        return view('backend.config.edit');
    }

    public function update()
    {
        $config = Config::first();

        return view('backend.config.update', ['config' => $config]);
    }
}
