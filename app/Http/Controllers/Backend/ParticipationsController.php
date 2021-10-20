<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Participant;
use DB;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ParticipationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        if ($request->input('search') == null) {
            $participants = Participant::all();
        } else {
            $search_string = $request->input('search');
            $participants = Participant::with('groups')
                ->where('scout_name', 'LIKE', "%$search_string%")
                ->orWhere('last_name', 'LIKE', "%$search_string%")
                ->orWhere('first_name', 'LIKE', "%$search_string%")
                ->orWhere('group_name', 'LIKE', "%$search_string%")->get();
        }

        return view('backend.participations.index', ['participations' => $participants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        $groups = DB::table('groups')->select('id', 'group_name')->get();

        return view('participations.add', ['groups' => $groups]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $scout_name = $request->input('scout_name');
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $address = $request->input('address');
        $plz = $request->input('plz');
        $place = $request->input('place');
        $birthday = $request->input('birthday');
        $gender = $request->input('gender');
        $group = $request->input('group');

        if ($gender) {
            if ($gender == 'm') {
                $gender = 'Männlich';
            } elseif ($gender == 'w') {
                $gender = 'Weiblich';
            } elseif ($gender == 'd') {
                $gender = 'Anderes';
            } else {
                $gender = null;
            }
        } else {
            $gender = null;
        }

        DB::table('participations')->insert([
            'scout_name' => $scout_name,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'address' => $address,
            'plz' => $plz,
            'place' => $place,
            'birthday' => $birthday,
            'gender' => $gender,
            'FK_GRP' => $group,
        ]);

        return redirect()->back()->with('message', 'Teilnehmer wurde erstellt.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $pid
     *
     * @return Factory|View
     */
    public function edit($pid)
    {
        $participant = Participant::where('id', '=', $pid)->first();
        $groups = Group::all();

        return view('participations.edit', ['participant' => $participant, 'groups' => $groups]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param                          $pid
     *
     * @return RedirectResponse
     */
    public function update(Request $request, $pid)
    {
        $scout_name = $request->input('scout_name');
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $address = $request->input('address');
        $plz = $request->input('plz');
        $place = $request->input('place');
        $birthday = $request->input('birthday');
        $gender = $request->input('gender');
        $group = $request->input('group');

        if ($gender) {
            if ($gender == 'm') {
                $gender = 'Männlich';
            } elseif ($gender == 'w') {
                $gender = 'Weiblich';
            } elseif ($gender == 'd') {
                $gender = 'Anderes';
            } else {
                $gender = null;
            }
        } else {
            $gender = null;
        }

        $participant = Participant::find($pid);
        $participant->scout_name = $scout_name;
        $participant->first_name = $first_name;
        $participant->last_name = $last_name;
        $participant->address = $address;
        $participant->plz = $plz;
        $participant->place = $place;
        $participant->birthday = $birthday;
        $participant->gender = $gender;
        $participant->FK_GRP = $group;

        $participant->save();

        return redirect()->back()->with('message', 'Teilnehmer wurde aktualisiert.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $uid
     *
     * @return RedirectResponse
     */
    public function destroy($uid)
    {
        Participant::destroy($uid);

        return redirect()->back()->with('message', 'Teilnehmer erfolgreich gelöscht.');
    }
}
