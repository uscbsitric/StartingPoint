<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = ['App\Events\TestEvent1' => ['App\Listeners\TestListener1',
    												 'App\Listeners\TestListener2'
        										    ],
    		             'App\Events\TestEvent3' => ['App\Listeners\TestListener3']
    					];
    
    protected $subscribe = ['App\Listeners\EventSubscriber1'];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }
}
