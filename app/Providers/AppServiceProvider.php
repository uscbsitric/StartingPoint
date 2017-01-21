<?php

namespace App\Providers;

use Queue;
use Illuminate\Support\ServiceProvider;
use Illuminate\Queue\Events\JobProcessed;

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
