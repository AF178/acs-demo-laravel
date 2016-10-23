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

Route::get('/', function () {
    return view('welcome');
});

Route::get('acs', function(){
	return view('acs', [
			'merchant'=>'MoneyDemo', 
			'amount'=>'25,95', 
			'date'=>'25 october 2016', 
			'cardnumber'=>'4512********6523']);
});

Route::get('enroll', function () {
	return view('bankenroll', ['cardnumber'=>'7845********9856']);
});
