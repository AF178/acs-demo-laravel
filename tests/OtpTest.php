<?php


//use Rych\OTP;
use Rych\OTP\Seed;
use Rych\OTP\HOTP;
use Rych\OTP\TOTP;


class OtpTest extends TestCase {
	
	function testCanGenerateSeed() {
		
		// Generates a 20-byte (160-bit) secret key
		$otpSeed = Seed::generate();
		
		// -OR- use a pre-generated string
		$otpSeed = new Seed('ThisIsMySecretSeed');
		
		// Display secret key details
		printf("Secret (HEX): %s\n", $otpSeed->getValue(Seed::FORMAT_HEX));
		printf("Secret (BASE32): %s\n", $otpSeed->getValue(Seed::FORMAT_BASE32));
		
		//
		$this->assertNotEmpty($otpSeed);
	}
	
	function testCanGenerateHOTP(){
		
		$otpSeed = new Seed('ThisIsMySecretSeed');
		$otpCounter = 200;
		
		// The constructor will accept a Seed object or a string
		$otplib = new HOTP($otpSeed);
		
		$otp = $otplib->calculate($otpCounter);
		//$counterValidated = $otplib->getLastValidCounterOffset();
		
		printf("HOTP: %s\n", $otp);
		//printf("Counter: %s\n", $counterValidated);
		
		
		$this->assertNotEmpty($otp);
		//$this->assertEquals(200, $counterValidated);
	}
	
	function testCanValidateHOTP(){
		
		$otpSeedGenerated = new Seed('ThisIsMySecretSeed');
		$otpCounterGenerated = 200;
		$otplibGenerated = new HOTP($otpSeedGenerated);
		$otpGenerated = $otplibGenerated->calculate($otpCounterGenerated);
		
		$otpSeedValidated = new Seed('ThisIsMySecretSeed');
		$otpCounterValidated = 200;
		$otplibValidated = new HOTP($otpSeedValidated);
		
		$validated = $otplibValidated->validate($otpGenerated,$otpCounterValidated);
		
		$this->assertTrue($validated);
	}
	
	function testCanGenerateTOTP(){
		
		$otpSeed = new Seed('3132333435363738393031323334353637383930');
		
		$otplib = new TOTP($otpSeed);
		$otplib->setTimeStep(120);
		
		$otp = $otplib->calculate();
		
		printf("TOTP: %s\n", $otp);
		//printf("Counter: %s\n", $counterValidated);
		
		
		$this->assertNotEmpty($otp);
		//$this->assertEquals(200, $counterValidated);
		
		//strtotime('1970-01-01 00:00:59 UTC'), '287082'
	}
	
	function testGenerateHEXSeed() {
	
		// Generates a 20-byte (160-bit) secret key
		//$otpSeed = Seed::generate();
	
		// -OR- use a pre-generated string
		$otpSeed = new Seed('thisismysecret');
	
		// Display secret key details
		printf("Secret (HEX): %s\n", $otpSeed->getValue(Seed::FORMAT_HEX));
		printf("Secret (BASE32): %s\n", $otpSeed->getValue(Seed::FORMAT_BASE32));
	
		//
		$this->assertNotEmpty($otpSeed,'this was the HEX seed for thisismysecret');
	}
	
	
}