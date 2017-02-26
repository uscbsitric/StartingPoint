<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Event;
use App\User;
use App\Events\TestEvent1;
use App\Events\TestEvent2;

class EventsTestController extends Controller
{
    public function eventtest()
    {
    	$user = User::where('id', '=', 1)->first();

    	// testing Laravel Events + Queue + Pusher + javascript based client
    	Event::fire(new TestEvent1($user));
    	
    	//Event::fire(new TestEvent2($user));

    	echo "<br>";
    	exit('Testing Event Firing');
    }
}
