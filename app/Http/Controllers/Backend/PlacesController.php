<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
            $places = Place::where("name", "LIKE", "%$search_string%")
                ->orWhere("address", "LIKE", "%$search_string%")
                ->orWhere("city", "LIKE", "%$search_string%")
                ->orWhere("plz", "LIKE", "%$search_string%")->get();
        }

        return view('backend.places.index', ['places' => $places]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('backend.places.add');
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
        $address = $request->input('address');
        $city = $request->input('city');
        $plz = $request->input('plz');
        $quota = $request->input('quota');

        Place::create([
            'name' => $name,
            'address' => $address,
            'city' => $city,
            'plz' => $plz,
            'quota' => $quota,
        ]);

        return redirect()->back()->with('message', 'Gruppe wurde erstellt.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $pid
     * @return Application|Factory|View
     */
    public function edit($pid)
    {
        $place = Place::find($pid);

        return view('backend.places.edit', ['place' => $place]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $pid
     * @return RedirectResponse
     */
    public function update(Request $request, $pid)
    {
        $name = $request->input('name');
        $address = $request->input('address');
        $city = $request->input('city');
        $plz = $request->input('plz');
        $quota = $request->input('quota');

        $place = Place::find($pid);
        $place->name = $name;
        $place->address = $address;
        $place->city = $city;
        $place->plz = $plz;
        $place->quota = $quota;
        $place->save();

        return redirect()->back()->with('message', 'Ort wurde aktualisiert.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $pid
     * @return RedirectResponse
     */
    public function destroy($pid)
    {
        Place::destroy($pid);

        return redirect()->back()->with('message', 'Ort erfolgreich gelöscht.');
    }
}
