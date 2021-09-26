<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Place;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PlacesController extends Controller
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
        if($request->search == null){
            $places = Place::all();
        }else{
            $search_string = $request->search;
            $places = Place::where()->orWhere();
        }

        return view('backend.places.index', ['places' => $places]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('backend.groups.add');
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
        $group_name = $request->input('group_name');

        DB::table('groups')->insert([
            'group_name' => $group_name,
        ]);

        return redirect()->back()->with('message', 'Gruppe wurde erstellt.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $gid
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function edit($gid)
    {
        $groups = DB::table('groups')->where('id', '=', $gid)->first();

        return view('backend.groups.edit', ['groups' => $groups]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $gid
     *
     * @return RedirectResponse
     */
    public function update(Request $request, $gid)
    {
        $group_name = $request->input('group_name');

        $group = Group::find($gid);
        $group->group_name = $group_name;
        $group->save();

        return redirect()->back()->with('message', 'Gruppe wurde aktualisiert.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $gid
     *
     * @return RedirectResponse
     */
    public function destroy($gid)
    {
        DB::table('groups')->where('id', '=', $gid)->delete();

        return redirect()->back()->with('message', 'Gruppe erfolgreich gelöscht.');
    }
}
