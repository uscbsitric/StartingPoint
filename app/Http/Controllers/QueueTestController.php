<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class QueueTestController extends Controller
{
    public function jobEventTest()
    {
       $testVariable = 'test value';
       exit('jobEventTest function of QueueTestController.');
    }
}
