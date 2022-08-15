<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Guardian;
use Illuminate\Http\Request;

class GuardianController
{
    public function show($uuid)
    {
        $guardian = Guardian::where('reference', '=', $uuid)->first();

        return view('frontend.register.guardian.show', ['guardian' => $guardian]);
    }

    public function edit($uuid)
    {
        $guardian = Guardian::where('reference', '=', $uuid)->first();

        return view('frontend.register.guardian.edit', ['guardian' => $guardian]);
    }

    public function update($uuid, Request $request)
    {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $mail = $request->input('mail');
        $phone = $request->input('phone');

        $guardian = Guardian::where('reference', '=', $uuid)->update([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'mail' => $mail,
            'phone' => $phone,
        ]);

        return redirect()->back()->with('message', 'Daten wurden gespeichert!');
    }
}
