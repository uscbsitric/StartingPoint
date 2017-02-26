<?php

namespace App\Events;

use App\Events\Event;
use App\User;
use Illuminate\Queue\SerializesModels;

class TestEvent2 extends Event
{
	use SerializesModels;
	
	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct(User $user)
	{
		$this->user = $user;
		$testVariable = 'testValue';
	}
	
	/**
	 * Get the channels the event should be broadcast on.
	 *
	 * @return array
	 
	public function broadcastOn()
	{
		return [];
	}
	*/
}