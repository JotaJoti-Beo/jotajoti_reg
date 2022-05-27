<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Guardian;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class GuardiansController extends Controller
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
        if($request->input('search') == null) {
            $guardians = Guardian::all();
        } else {
            $search_string = $request->input('search');
            $guardians = Guardian::where("first_name", "LIKE", "%$search_string%")
                ->orWhere("last_name", "LIKE", "%$search_string%")->get();
        }

        return view('backend.guardians.index', ['guardians' => $guardians]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('backend.guardians.add');
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $uid
     *
     * @return Application|Factory|View
     */
    public function edit($gid)
    {
        $guardian = Guardian::find($gid);

        return view('backend.guardians.edit', ['guardian' => $guardian]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param                          $uid
     *
     * @return RedirectResponse
     */
    public function update()
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $uid
     *
     * @return RedirectResponse
     */
    public function destroy($gid)
    {
        Guardian::destroy($gid);

        return redirect()->back()->with('message', 'Notfallkontakt erfolgreich gelöscht');
    }
}
