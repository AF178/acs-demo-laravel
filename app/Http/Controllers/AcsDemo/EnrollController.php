<?php
namespace App\Http\Controllers\AcsDemo;

use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use Rych\OTP\Seed;


class EnrollController extends Controller {
	
	
	function makeQrCodeUrl($EnrolExp) {
	
		$data = urlencode($EnrolExp);
		$server = "https://api.qrserver.com/v1/create-qr-code/?";
		$dataPrefix= "data=";
		$suffix = "&size=200x200";
	
		return $server.$dataPrefix.$data.$suffix;
	
	}
	
	function displayQRCode($qrCodeUrl){
		
		echo '<img src="'.$qrCodeUrl.'" alt="" title="" />';
		
	}
	
	function generateUri(){
		
		$secret = env('OTP_KEY');
		$timestep = env('OTP_TIMESTEP');
		$otpSeed = new Seed($secret);
		$base32Key = $otpSeed->getValue(Seed::FORMAT_BASE32);
		$EnrolExp = "otpauth://totp/ACME%20Co:john.doe@email.com?secret=".$base32Key."&issuer=ACME%20Co&algorithm=SHA1&digits=6&period=30";
		
		
        //echo '<img src="https://api.qrserver.com/v1/create-qr-code/?data=HelloWorld&amp;size=100x100" alt="" title="" />';
        
        //$this->displayQRCode($this->makeQrCodeUrl($EnrolExp));
        
        

		return view('bankenroll', ['qrcode' => $this->makeQrCodeUrl($EnrolExp), 'cardnumber' => '4512********7845']); // $this->makeQrCodeUrl($EnrolExp);
		
		}
		
		

	
}