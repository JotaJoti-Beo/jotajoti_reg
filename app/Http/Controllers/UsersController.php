<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
    	$users = DB::table('users')->get();

    	return view('users.users', ['users' => $users]);
	}
}
