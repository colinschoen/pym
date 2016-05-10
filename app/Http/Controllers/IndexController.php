<?php namespace App\Http\Controllers;

use Auth, Hash, Request, Mail, DB;
use App\User, App\Content, App\Header;

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
		$data = array();
		foreach ($content as $c) {
			if ($c->name == "service1" || $c->name == "service2" || $c->name == "service3" || $c->name == "service4") {
				$c->content = str_replace(" ", "<br />", $c->content);
			}
			$data[$c->name] = $c->content;
		}
		$headers = Header::orderBy("sequence", "ASC")->get();
		return view('index')->with(["data" => $data, "headers" => $headers]);
	}


	/**
	 * Show the application login page
	 * @return Response
	 */
	public function get_admin_login() {
		return view("admin.admin_login");
	}


	/**
	 * Show the application login page
	 * @return Response
	 */
	public function get_admin_logout() {
		Auth::logout();
		return redirect()->route("index");
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
			return redirect()->route("admin")->with("message", "Successfully logged in.");
		}
	}

    /**
	 * Show the application's admin dashboard
	 *
	 * @return Response
	 */
	public function get_admin()
	{

		$content = Content::all();
		$data = array();
		foreach ($content as $c) {
			$data[$c->name] = $c->content;
		}
		$headers = Header::orderBy("sequence", "ASC")->get();
		return view('admin.admin')->with(["data" => $data, "headers" => $headers]);
	}
	
	public function post_admin_save_header() {
		$dataHeader = Request::input('inputHeader');
		$dataSubHeader = Request::input('inputSubHeader');
		$dataOrder = Request::input('inputOrder');
		#First delete all existing header content
		DB::table("headers")->delete();
		$total = count($dataHeader);
		$i = 0;
		while ($i < $total) {
			$header = new Header;
			$header->header = $dataHeader[$i];
			$header->subheader = $dataSubHeader[$i];
			$header->sequence= $dataOrder[$i];
			$header->save();
			$i++;
		}
		return redirect()->route("admin")->with("message", "Header successfully updated.");
	}

	public function post_admin_save_h1(){
		$linkText = Request::input('inputText');
		$linkSubText = Request::input('inputSubText');
		$lt = Content::firstOrCreate(["name" => "h1Text"]);
		$lt->content = $linkText;
		$lt->save();

		$lst = Content::firstOrCreate(["name" => "h1SubText"]);
		$lst->content = $linkSubText;
		$lst->save();
		return redirect()->route("admin")->with("message", "Changes saved successfully.");
	}
	public function post_admin_save_h2(){
		$linkText = Request::input('inputText');
		$linkSubText = Request::input('inputSubText');

		$lt = Content::firstOrCreate(["name" => "h2Text"]);
		$lt->content = $linkText;
		$lt->save();

		$lst = Content::firstOrCreate(["name" => "h2SubText"]);
		$lst->content = $linkSubText;
		$lst->save();
		return redirect()->route("admin")->with("message", "Changes saved successfully.");

	}
	public function post_admin_save_h3(){
		$linkText = Request::input('inputText');
		$linkSubText = Request::input('inputSubText');

		$lt = Content::firstOrCreate(["name" => "h3Text"]);
		$lt->content = $linkText;
		$lt->save();

		$lst = Content::firstOrCreate(["name" => "h3SubText"]);
		$lst->content = $linkSubText;
		$lst->save();
		return redirect()->route("admin")->with("message", "Changes saved successfully.");

	}
	public function post_admin_save_btext(){
		$breakoutHeader = Request::input('inputBreakoutHeader');
		$breakoutText = Request::input('inputBreakoutText');
		$bh = Content::firstOrCreate(["name" => "breakoutHeader"]);
		$bh->content = $breakoutHeader;
		$bh->save();
		$bt = Content::firstOrCreate(["name" => "breakoutText"]);
		$bt->content = $breakoutText;
		$bt->save();
		return redirect()->route("admin")->with("message", "Changes saved successfully.");

	}
	public function post_admin_save_services(){
		$service1 = Request::input('inputService1');
		$service2 = Request::input('inputService2');
		$service3 = Request::input('inputService3');
		$service4 = Request::input('inputService4');
		$s1 = Content::firstOrCreate(["name" => "service1"]);
		$s1->content = $service1;
		$s1->save();
		$s2 = Content::firstOrCreate(["name" => "service2"]);
		$s2->content = $service2;
		$s2->save();
		$s3 = Content::firstOrCreate(["name" => "service3"]);
		$s3->content = $service3;
		$s3->save();
		$s4 = Content::firstOrCreate(["name" => "service4"]);
		$s4->content = $service4;
		$s4->save();
		return redirect()->route("admin")->with("message", "Changes saved successfully.");
	}
	public function post_admin_save_team(){
		$teamName1 = Request::input('inputTeamName1');
		$teamName2 = Request::input('inputTeamName2');
		$teamName3 = Request::input('inputTeamName3');

		$teamImage1 = Request::input('inputTeamImage1');
		$teamImage2 = Request::input('inputTeamImage2');
		$teamImage3 = Request::input('inputTeamImage3');

		$teamBioText1 = Request::input('inputTeamBioText1');
		$teamBioText2 = Request::input('inputTeamBioText2');
		$teamBioText3 = Request::input('inputTeamBioText3');

		$teamContent1 = Request::input('inputTeamContent1');
		$teamContent2 = Request::input('inputTeamContent2');
		$teamContent3 = Request::input('inputTeamContent3');
		
		$tn1 = Content::firstOrCreate(["name" => "teamName1"]);
		$tn1->content = $teamName1;
		$tn1->save();
		$tn2 = Content::firstOrCreate(["name" => "teamName2"]);
		$tn2->content = $teamName2;
		$tn2->save();
		$tn3 = Content::firstOrCreate(["name" => "teamName3"]);
		$tn3->content = $teamName3;
		$tn3->save();

		$ti1 = Content::firstOrCreate(["name" => "teamImage1"]);
		$ti1->content = $teamImage1;
		$ti1->save();
		$ti2 = Content::firstOrCreate(["name" => "teamImage2"]);
		$ti2->content = $teamImage2;
		$ti2->save();
		$ti3 = Content::firstOrCreate(["name" => "teamImage3"]);
		$ti3->content = $teamImage3;
		$ti3->save();

		$bt1 = Content::firstOrCreate(["name" => "teamBioText1"]);
		$bt1->content = $teamBioText1;
		$bt1->save();
		$bt2 = Content::firstOrCreate(["name" => "teamBioText2"]);
		$bt2->content = $teamBioText2;
		$bt2->save();
		$bt3 = Content::firstOrCreate(["name" => "teamBioText3"]);
		$bt3->content = $teamBioText3;
		$bt3->save();
		
		$ct1 = Content::firstOrCreate(["name" => "teamContent1"]);
		$ct1->content = $teamContent1;
		$ct1->save();
		$ct2 = Content::firstOrCreate(["name" => "teamContent2"]);
		$ct2->content = $teamContent2;
		$ct2->save();
		$ct3 = Content::firstOrCreate(["name" => "teamContent3"]);
		$ct3->content = $teamContent3;
		$ct3->save();

		return redirect()->route("admin")->with("message", "Changes saved successfully.");

	}
	public function post_admin_save_testimonials(){
		$testimonial1 = Request::input('inputTestimonial1');
		$testimonial2 = Request::input('inputTestimonial2');
		$testimonial3 = Request::input('inputTestimonial3');
		$t1 = Content::firstOrCreate(["name" => "testimonial1"]);
		$t1->content = $testimonial1;
		$t1->save();
		$t2 = Content::firstOrCreate(["name" => "testimonial2"]);
		$t2->content = $testimonial2;
		$t2->save();
		$t3 = Content::firstOrCreate(["name" => "testimonial3"]);
		$t3->content = $testimonial3;
		$t3->save();
		return redirect()->route("admin")->with("message", "Changes saved successfully.");

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

	public function post_send_contact() {
		#Verify the recapatcha was valid
		$payload = array(
			"secret" => urlencode("6Ld0wR0TAAAAAPPQo5E_O2ZmWrErf5wINsgFvndS"),
			"response" => Request::input("g-recaptcha-response"),
			"remoteip" => Request::ip()
		);
		$fields_string = "";
		foreach($payload as $key=>$value) {
			$fields_string .= $key.'='.$value.'&';
		}
		rtrim($fields_string, '&');
		$url = "https://www.google.com/recaptcha/api/siteverify";
		$ch = curl_init();
		//set the url, number of POST vars, POST data
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_POST, count($payload));
		curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
		$result = curl_exec($ch);
		curl_close($ch);
		if ($result["success"] == "false") {
			return redirect()->route("index")->with("message", "Antispam verification failed.");
		}
		$name = Request::input('name');
		$email = Request::input('email');
		$message = Request::input('message');
		$body = "Name: " . $name;
		$body .= "\nEmail: " . $email;
		$body .= "\nMessage: " . $message;
		Mail::raw($body, function ($message) {
			$message->to("dov@pollacksilvapollack.com")->subject("Riverene Contact Form");
		});
		return redirect()->route("index")->with("message", "Thanks, your message was received.");

	}

}
