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
            $places = Place::where("place_name", "LIKE", "%$search_string%")
                ->orWhere("place_address", "LIKE", "%$search_string%")
                ->orWhere("place_city", "LIKE", "%$search_string%")
                ->orWhere("place_plz", "LIKE", "%$search_string%")->get();
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
        $place_name = $request->input('place_name');
        $place_address = $request->input('place_address');
        $place_city = $request->input('place_city');
        $place_plz = $request->input('place_plz');
        $place_max_tn = $request->input('place_max_tn');

        Place::create([
            'place_name' => $place_name,
            'place_address' => $place_address,
            'place_city' => $place_city,
            'place_plz' => $place_plz,
            'place_max_tn' => $place_max_tn,
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
        $place_name = $request->input('place_name');
        $place_address = $request->input('place_address');
        $place_city = $request->input('place_city');
        $place_plz = $request->input('place_plz');
        $place_max_tn = $request->input('place_max_tn');

        $place = Place::find($pid);
        $place->place_name = $place_name;
        $place->place_address = $place_address;
        $place->place_city = $place_city;
        $place->place_plz = $place_plz;
        $place->place_max_tn = $place_max_tn;
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
