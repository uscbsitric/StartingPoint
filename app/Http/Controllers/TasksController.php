<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;
use App\Task;

class TasksController extends Controller
{
	protected $tasksRepository;
	
    public function __construct(TaskRepository $tasksRepository)
    {
    	$this->middleware('auth');
    	$this->tasksRepository = $tasksRepository;
    }
    
    public function index(Request $request)
    {
    	//$tasks = $request->user()->tasks()->get();
    	$tasks = $this->tasksRepository->forUser($request->user());

    	return view('tasks.index', compact('tasks'));
    }

    public function store( Request $request, TaskRequest $taskRequest)
    {
    	// create the task
    	$request->user()->tasks()->create(['name' => $request->name]);

    	return redirect('/tasks');
    }

    public function destroy(Request $request, Task $task)
    {
    	$result = $this->authorize('destroy', // name of the policy method we wish to call 
    							   $task   // the model instance that is our current concern
    							  );
    	$task->delete();

    	return redirect('/tasks');
    }
    
    public function test()
    {
    	return 'This is the taskTest view';
    }
    
    public function test1()
    {
    	return 'This is the test1 view, Route Group & Named Routes Example';
    }
}