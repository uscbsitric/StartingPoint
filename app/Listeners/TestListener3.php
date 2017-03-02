<?php

namespace App\Listeners;

use App\Events\TestEvent3;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestListener3 implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  TestEvent3  $event
     * @return void
     */
    public function handle(TestEvent3 $event)
    {
    	// Access the userModel using $event->user...
    	$user = $event->user;
    	$id = $user->id;
    	$name = $user->name;
    	$email = $user->email;
    	$role = $user->role;
    	$testVariable1 = 'test value1';
    }
}
