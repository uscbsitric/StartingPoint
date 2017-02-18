<?php

namespace App\Listeners;

class EventSubscriber1
{
	public function subscriberFunction1($event)
	{
		$testVariable1 = 'testValue1';
	}

	public function subscriberFunction2($event)
	{
		$testVariable2 = 'testValue2';
	}
	
	public function subscribe($events)
	{
		$events->listen('App\Events\TestEvent1', 'App\Listeners\EventSubscriber1@subscriberFunction1');
		$events->listen('App\Events\TestEvent2', 'App\Listeners\EventSubscriber1@subscriberFunction2');
	}
}