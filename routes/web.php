<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//use App\Http\Controllers\AcsDemo\AcsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('acs', 'AcsDemo\AcsController@authorizeNoParams');

Route::post('authcode', 'AcsDemo\AuthCodeController@post');

Route::get('authcode', 'AcsDemo\AuthCodeController@get');



Route::get('enroll', 'AcsDemo\EnrollController@generateUri' );
	
	
	//return view('bankenroll', ['cardnumber'=>'7845********9856']);

