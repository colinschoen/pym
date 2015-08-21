<?php namespace App\Http\Controllers;

use Auth, Hash, Request;
use App\User, App\Content;

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
	public function get_index()
	{
		$content = Content::all();
		return view('index')->with(["content" => $content]);
	}


	/**
	 * Process an application login request
	 *
	 * @return Response
	 */
	public function post_admin_login()
	{
		$user = Request::input("inputUserName");
		$password = Request::input("inputPassword");
		$users = User::where("username", "=", $user)->first();
		if (empty($users)) {
			return redirect()->route("adminlogin")->with("message", "No user exists with that username.");
		}
		else if (!Hash::check($password, $users->password)) {
			return redirect()->route("adminlogin")->with("message", "Invalid password.");
		}
		else {
			//Valid credentials
			Auth::loginUsingId($users->id);
			return redirect()->route("admindashboard")->with("message", "Successfully logged in.");
		}
	}

    /**
	 * Show the application's admin dashboard
	 *
	 * @return Response
	 */
	public function get_admin_login()
	{
		//Get our content
		$content = Content::orderBy("name");
		return view('admin')->with(["content" => $content]);
	}

	/**
	 * Update content value
	 * @return String
	 */
	public function post_update_content() {
		//Get our content id
		$cid = Request::input("inputCid");
		$cvalue = Request::input("inputContent");
		//Ensure that this is a valid id
		$content = Content::findOrFail($cvalue);
		$content->value = $cvalue;
		//Update our model
		$content->save();
	}


	/**
	 * Application logout
	 * @return Redirect
	 */
	public function get_logout() {
		Auth::logout();
		return redirect()->route("adminlogin")->with("message", "You have successfully been logged out.");
	}

    /**
	 * Get a bcrypt hash of a string
	 * @return String
	 */
	public function get_hash($string) {
		die(Hash::make($string));
    }

}
