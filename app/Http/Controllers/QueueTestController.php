<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Jobs\TestJob1;

class QueueTestController extends Controller
{
    public function jobEventTest()
    {
       $testVariable = 'test value';
       $user = User::where('id', '=', 1)->first();
       $this->dispatch(new TestJob1($user));

       exit('jobEventTest function of QueueTestController.');
    }
    
    public function queueTest()
    {
      exit('this is the queueTest function() of the QueueTestController');
    }
}
