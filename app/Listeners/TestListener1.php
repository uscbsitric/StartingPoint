<?php

namespace App\Listeners;

use App\Events\TestEvent1;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestListener1
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
     * @param  TestEvent1  $event
     * @return void
     */
    public function handle(TestEvent1 $event)
    {
        //
    }
}
