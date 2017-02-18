<?php

namespace App\Providers;

use Queue;
use Illuminate\Support\ServiceProvider;
use Illuminate\Queue\Events\JobProcessed;
use Illuminate\Queue\Events\JobFailed;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    	Queue::after(function (JobProcessed $event)
			    	 {
			    	   $connectionName = $event->connectionName;
			    	   $job = $event->job;
			    	   $data = $event->data;
			    	   $testVariable = 'test Value1';
			    	 }
    				);
    	
    	Queue::failing( function(JobFailed $event)
    	                {
                          $testVariable = 'test value';
                        } 
    	              );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
