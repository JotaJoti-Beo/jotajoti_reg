<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Guardian;
use App\Models\Participant;

class ParticipantController
{
    public function create()
    {
    }

    public function store()
    {

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
