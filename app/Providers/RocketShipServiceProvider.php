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
    public function boot() // This method is called after all other service providers have been registered, meaning you have access to all other services that have been registered by the framework.
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() // Only bind things to the Service Container.
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
    public function provides() // This is needed when setting the $defer property to true.
    {						   // returns the service container bindings that the provider registers:
    	return ['App\Helpers\Contracts\RocketShipContract'];
    }
    
    public function thisIsATest()
    {
    	echo "this is a test";
    }
}