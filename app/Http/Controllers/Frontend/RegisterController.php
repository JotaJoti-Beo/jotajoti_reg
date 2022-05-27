<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Guardian;
use Illuminate\Http\Request;
use Str;

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

    public function registerParent(Request $request)
    {
        $parent_first_name = $request->input('parent_first_name');
        $parent_last_name = $request->input('parent_last_name');
        $parent_mail = $request->input('parent_mail');
        $parent_phone = $request->input('parent_phone');

        $reference = Str::uuid();

        Guardian::create([
            'first_name' => $parent_first_name,
            'last_name' => $parent_last_name,
            'phone' => $parent_phone,
            'mail' => $parent_mail,
            'reference' => $reference,
        ]);
    }

    public function completed()
    {
        return view('frontend.register.completed');
    }
}
