<?php

namespace App\Http\Controllers\AcsDemo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Rych\OTP\Seed;
//use Rych\OTP\HOTP;
use Rych\OTP\TOTP;


class AuthCodeController extends Controller {

	function post(Request $request){
		
		$otp = $request->input('otp');
		
		
		
		return $otp;
		
	}
	
function get(Request $request){
		
		$otp = $request->input('otp');
		
		$secret = env('OTP_KEY');
		$timestep = env('OTP_TIMESTEP');
		$otpSeed = new Seed($secret);
		$otplib = new TOTP($otpSeed);
		$otplib->setTimeStep($timestep);
		
		$result = $otplib->validate($otp);
		
		if ($result == TRUE) {
			//echo "good otp";
			return view('result',['result' => 'Transaction is successful']); 
		} else return view('result', ['result' => 'Transaction has failed']);
		
		//echo "otpauth://totp/ACME%20Co:john.doe@email.com?secret=HXDMVJECJJWSRB3HWIZR4IFUGFTMXBOZ&issuer=ACME%20Co&algorithm=SHA1&digits=6&period=30";
		
	}
	
	
}