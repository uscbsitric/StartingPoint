<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use App\Helpers\RocketLauncher;   // use App\Helpers\RocketShip; ???
use App\Helpers\RocketShip;
use App\Helpers\RocketLauncher;

class RocketShipServiceProvider extends ServiceProvider
{
	protected $defer = true;

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
    	/*
    	 * Register a binding with the container.
	     *
	     * @param  string|array  $abstract
	     * @param  \Closure|string|null  $concrete
	     * @param  bool  $shared
	     * @return void
    	 */
        $this->app->bind('App\Helpers\Contracts\RocketShipContract',
        				 function()
        				 {
        					//return new RocketShip();
        					return new RocketLauncher();
        				 }
        				);
    }
    
    /**
     * Get the services provided by the provider
     */
    public function provides()
    {
    	return ['App\Helpers\Contracts\RocketShipContract'];
    }
}