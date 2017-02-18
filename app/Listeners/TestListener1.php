<?php

namespace App\Listeners;

use App\Events\TestEvent1;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Mail\Mailer;

class TestListener1
{
	/**
	 * Your event listeners may also type-hint any dependencies they need on their constructors. 
	 * All event listeners are resolved via the Laravel service container, so dependencies will be injected automatically
	 */
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Mailer $mailer)
    {
    	$this->mailer = $mailer;
    }

    /**
     * Event listeners receive the event instance in their handle method.
     * The event:generate command will automatically import the proper event class and type-hint the event on the handle method. 
     * Within the handle method, you may perform any logic necessary to respond to the event. 
     */
    /**
     * Handle the event.
     *
     * @param  TestEvent1  $event
     * @return void
     */
    public function handle(TestEvent1 $event)
    {
    	// Access the userModel using $event->user...
    	$user = $event->user;
        $testVariable1 = 'test value1';
    }
}
