<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index(Request $request){
	    if ($request->input('search') == null) {
		    $places = DB::table('places')
			    ->leftJoin('activities', 'activities.id', '=', 'places.FK_GRP')
			    ->select('activities.*', 'places.*')->get();
	    } else {
		    $search_string = $request->input('search');
		    $places = DB::table('places')
			    ->leftJoin('activities', 'activities.id', '=', 'places.FK_GRP')
			    ->select('activities.*', 'places.*')
			    ->where('place_name', 'LIKE', "%$search_string%")
			    ->orWhere('activity_name', 'LIKE', "%$search_string%")
			    ->orWhere('first_name', 'LIKE', "%$search_string%")
			    ->orWhere('group_name', 'LIKE', "%$search_string%")->get();
	    }

	    return view('place.place', ['places' => $places]);
    }
}
