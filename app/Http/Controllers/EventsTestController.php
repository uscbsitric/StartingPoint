<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Event;
use App\User;
use App\Events\TestEvent1;

class EventsTestController extends Controller
{
    public function eventtest()
    {
    	$user = User::where('id', '=', 1)->first();

    	Event::fire(new TestEvent1($user));

    	echo "<br>";
    	exit('Testing Event Firing');
    }
}
