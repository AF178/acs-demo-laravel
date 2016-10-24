<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Rych\OTP;

class OtpServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    	$this->app->singleton(OTP::class, function ($app) {
    	return new OTP(config('otp'));
    	});
    }
}
