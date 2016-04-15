<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ["as" => "index", "uses" => 'IndexController@get_index']);
Route::get('admin/login', ["as" => "adminlogin", "uses" => 'IndexController@get_admin_login']);
Route::post('admin/login', ["as" => "doadminlogin", "uses" => 'IndexController@post_admin_login']);
Route::get('admin/hash/{string}', ["as" => "hash", "uses" => "IndexController@get_hash"]);


Route::get('admin', ["as" => "admin", "uses" => 'IndexController@get_admin', "middleware" => "auth"]);
Route::get('admin/logout', ["as" => "doadminlogout", "uses" => 'IndexController@get_admin_logout', "middleware" => "auth"]);

Route::post('admin/save/h1', ["as" => "adminsaveh1", "uses" => "IndexController@post_admin_save_h1", "middleware" => "auth"]);
Route::post('admin/save/h2', ["as" => "adminsaveh2", "uses" => "IndexController@post_admin_save_h2", "middleware" => "auth"]);
Route::post('admin/save/h3', ["as" => "adminsaveh3", "uses" => "IndexController@post_admin_save_h3", "middleware" => "auth"]);

Route::post('admin/save/btext', ["as" => "adminsavebtext", "uses" => "IndexController@post_admin_save_btext", "middleware" => "auth"]);


Route::post('admin/save/services', ["as" => "adminsaveservices", "uses" => "IndexController@post_admin_save_services", "middleware" => "auth"]);

Route::post('admin/save/team', ["as" => "adminsaveteam", "uses" => "IndexController@post_admin_save_team", "middleware" => "auth"]);

Route::post('admin/save/testimonials', ["as" => "adminsavetestimonials", "uses" => "IndexController@post_admin_save_testimonials", "middleware" => "auth"]);

Route::post('send/contact', ["as" => "sendcontact", "uses" => "IndexController@post_send_contact"]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
