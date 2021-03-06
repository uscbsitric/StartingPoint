<?php

namespace App\Events;

use App\User;
use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

// An Event Class is simply a data container which holds the information related to the event.
// For example, our TestEvent1 recieves the Eloquent ORM object.
// As you can see, this event class contains no logic.  It is simply a container for the User object
// that was created.
class TestEvent1 extends Event implements ShouldBroadcast
{
    use SerializesModels;  // the SerializesModels trait used by the event will gracefully serialize any Eloquent models
                           // if the event will gracefully serialize any Eloquent models if the event object is serialized
                           // using PHPs serialize function.

    public $user;
    public $testVar1;
    public $testVar2;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        $testVariable = 'testValue';
        $this->testVar1 = 'si Bertrand gwapo kaayu';
        $this->testVar2 = 'si Freds ninja';
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
    	$channels = array('my-channel');
        return $channels;
    }
    
    public function broadcastAs()
    {
    	$eventName = 'my-event';
    	return $eventName;
    }
}
