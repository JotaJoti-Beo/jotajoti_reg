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

    public function registerGuardian(Request $request)
    {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $mail = $request->input('mail');
        $phone = $request->input('phone');

        $reference = Str::uuid();

        $guardian = Guardian::create([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'phone' => $phone,
            'mail' => $mail,
            'reference' => $reference,
        ]);

        return redirect()->route('front-show-guardian', $guardian->id)->with('message', 'Konto wurde erstellt.');
    }

    public function completedGuardian()
    {


        return view('frontend.register.guardian.completed');
    }

    public function register()
    {
        return view('frontend.register.register');
    }

    public function completed()
    {
        return view('frontend.register.register');
    }
}
