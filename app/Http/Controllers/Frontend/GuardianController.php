<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Guardian;

class GuardianController
{
    public function show($guardid)
    {
        $guardian = Guardian::find($guardid);

        return view('frontend.register.guardian.show', ['guardian' => $guardian]);
    }

    public function edit($guardid)
    {
        $guardian = Guardian::find($guardid);

        return view('frontend.register.guardian.edit', ['guardian' => $guardian]);
    }

    public function update($guardid)
    {
        $guardian = Guardian::update([$guardid],
            [
                ''
            ]);

        return redirect()->back()->with('message', 'LUL');
    }
}
