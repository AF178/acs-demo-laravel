<?php

namespace App\Http\Controllers\AcsDemo;

use App\Http\Controllers\Controller;

class AcsController extends Controller {
	
	function authorizeNoParams() {
		
		$params = [
		'merchant' => 'MoneyDemo',
		'amount' => '25.95',
		'date' => '25 october 2016',
		'cardnumber' => '4512********7896',
		];
		
		return view('acs',$params);
	}
	
	function authorizeWithParams($params){
		
		
		
	}
	
}