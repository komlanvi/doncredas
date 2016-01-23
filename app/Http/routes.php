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

Route::get('/', [ "uses" => 'HomeController@indexAction', "as" => "home"]);


Route::resource('user', 'UserController');

//////////////////////////////////////////////////////////////////////////////////
/*

get("image", "ImageController@getForm");
post("image", "ImageController@postForm");

get('email', 'EmailController@getEmail');
post('email', 'EmailController@postEmail');
*/
///////////////////////////////////////////////////////////////////////////////////