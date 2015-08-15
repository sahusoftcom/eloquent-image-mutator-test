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

Route::get('/', function () {
    return view('welcome');
});


Route::post('/upload', function () {
    
	$userPhoto = new \App\UserPhoto;
	$userPhoto->photo = \Input::file('file');
	$userPhoto->save();

});

Route::get('/show/{id}', function ($id) {
    
	$userPhoto = \App\UserPhoto::find($id);

	return '<img src="'.  $userPhoto->photo->large .'" />';

});