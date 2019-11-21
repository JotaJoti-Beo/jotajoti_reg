<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GroupsController extends Controller
{
	public function index(Request $request)
	{
		if ($request->input('search') == null) {
			$groups = DB::table('group')
				->leftJoin('field', 'field.id', '=', 'group.FK_FLD')
				->select('group.id as group_id', 'group.group_name')->get();
		} else {
			$search_string = $request->input('search');
			$groups = DB::table('group')
				->leftJoin('field', 'field.id', '=', 'group.FK_FLD')
				->select('group.id as group_id', 'group.group_name')
				->where('group.group_name', 'LIKE', "%$search_string%")->get();
		}

		return view('groups.groups', ['groups' => $groups]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('groups.add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 *
	 * @return void
	 */
	public function store(Request $request)
	{
		$group_name = $request->input('group_name');
		DB::table('group')->insert(['group_name' => $group_name]);
		return redirect()->back()->with('message', 'Gruppe wurde erstellt.');
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param $gid
	 *
	 * @return Response
	 */
	public function edit($gid)
	{
		$groups = DB::table('group')->where('id', '=', $gid)->first();
		return view('groups.edit', ['groups' => $groups]);
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param Request $request
	 * @param $gid
	 *
	 * @return Response
	 */
	public function update(Request $request, $gid)
	{
		$group_name = $request->input('group_name');
		DB::table('group')->where('id', '=', $gid)->update(['group_name' => $group_name]);
		return redirect()->back()->with('message', 'Gruppe wurde aktualisiert.');
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param $gid
	 *
	 * @return Response
	 */
	public function destroy($gid)
	{
		DB::table('group')->where('id', '=', $gid)->delete();
		return redirect()->back()->with('message', 'Gruppe erfolgreich gelöscht.');
	}
}
