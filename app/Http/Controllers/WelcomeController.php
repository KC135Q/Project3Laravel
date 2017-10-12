<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class WelcomeController extends Controller
{
	public function index(Request $request)
	{
		if (!is_null($request->user()))
			return redirect()->action('HomeController@index');
		else
			return view('welcome');
	}
}

