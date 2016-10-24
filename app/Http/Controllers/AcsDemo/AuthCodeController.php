<?php

namespace App\Http\Controllers\AcsDemo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AuthCodeController extends Controller {

	function post(Request $request){
		
		$otp = $request->input('otp');
		
		
		
		return $otp;
		
	}
	
function get(Request $request){
		
		$otp = $request->input('otp');
		

		
		return $otp;
		
	}
	
	
}