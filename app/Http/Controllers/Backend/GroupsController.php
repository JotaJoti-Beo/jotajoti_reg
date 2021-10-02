<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
use App\Models\Group;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return Application|Factory|View
     */
    public function index(Request $request){
        if($request->input('search')  == null){
            $groups = Group::all();
        } else {
            $search_string = $request->input('search');
            $groups = Group::where('name', 'LIKE', "%$search_string%")->get();
        }

        return view('backend.groups.index', ['groups' => $groups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
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
        $name = $request->input('name');
        $quota = $request->input('quota');

        Group::create([
            'name' => $name,
            'quota' => $quota,
        ]);

        return redirect()->back()->with('message', 'Gruppe wurde erstellt.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $gid
     *
     * @return Application|Factory|View
     */
    public function edit($gid)
    {
        $group = Group::find($gid);

        return view('backend.groups.edit', ['group' => $group]);
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
        $name = $request->input('name');
        $quota = $request->input('quota');

        $group = Group::find($gid);
        $group->name = $name;
        $group->quota = $quota;
        $group->save();

        return redirect()->back()->with('message', 'Die Gruppe wurde aktualisiert.');
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
        Group::destroy($gid);

        return redirect()->back()->with('message', 'Gruppe erfolgreich gelöscht.');
    }
}
