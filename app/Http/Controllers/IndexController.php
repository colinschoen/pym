<?php namespace App\Http\Controllers;

class IndexController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Index Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the application's "index". 
	|
	*/

	/**
	 * Show the application's index view
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index');
	}

}
