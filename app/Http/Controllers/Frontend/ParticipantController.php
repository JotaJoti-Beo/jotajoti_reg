<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Participant;

class ParticipantController
{
    public function create()
    {
        return view('frontend.register.participant.add');
    }

    public function store(Request $request)
    {
        $request->input('');
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy($pid)
    {
        Participant::destroy($pid);

        return redirect()->back()->with('message', 'Teilnemende erfolgreich gelöscht');
    }
}
