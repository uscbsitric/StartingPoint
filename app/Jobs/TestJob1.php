<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;      // Because of the SerializesModels trait that the job is using, Eloquent models will be gracefully serialized and unserialized 
											// when the job is processing.   If your queued job accepts an Eloquent model in its constructor, only the identifier for the 
											// model will be serialized onto the queue. When the job is actually handled, the queue system will automatically re-retrieve 
											// the full model instance from the database. It's all totally transparent to your application and prevents issues that can 
											// arise from serializing full Eloquent model instances.

use Illuminate\Queue\InteractsWithQueue;    // Traits with methods that let you interact with the queue
use Illuminate\Contracts\Queue\ShouldQueue; // Indicating to Laravel that the job should be pushed onto the queue instead of run synchronously.
use Exception;

use App\User;

class TestJob1 extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $user;
    protected $failFlag;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user1, $failFlag)
    {
        $this->user = $user1;
        $this->failFlag = $failFlag;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
    	/*
    	 * Try- Catch and proper handling of possible exception occurence
    	 * Design the job to succeed, because some failures are not recoverable for us
    	 */

    	if( 'false' == $this->failFlag )
    	{
    		sleep(2);
    		$testVariable1 = 'test value 1';
    	}
        else
        {
        	try
        	{
        	  throw new Exception('Test Job 1 Failed');
        	}
        	catch(Exception $e)
        	{
        		sleep(5);
        		$e->getMessage();
        	}
        }
    }
    
    public function failed()
    {
    	// send report
    }
}
