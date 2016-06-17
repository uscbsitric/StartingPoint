<?php
	use App\Task;
	use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () 
				{
				    return view('welcome');
				}
		  );

// Display All Tasks
Route::get('/allTasks', function()
						{
							$tasks = Task::orderBy('created_at', 'asc')->get();

							return view('tasks', compact('tasks'));
						}
		 );

Route::post('/tasks', function(Request $request)
				      {
					    $validator = Validator::make($request->all(),
					   								 ['name' => 'required|max:255']
					   							    );
					   
					    if( $validator->fails() )
					    {
					       return redirect('/allTasks')->withInput()->withErrors($validator);
					    }
				   	   
					    // Create the task
					    $task = new Task;
					    $task->name = $request->name;
					    $task->save();

					    return redirect('/allTasks');
				      }
		   );

// Delete an Existing Task
Route::get('/task/{id}', function()
					     {
						     echo 'deleting an existing task';
					     }
		  );

Route::delete('/task/{id}', function ($id)
							{
								Task::findOrFail($id)->delete();
								return redirect('/allTasks');
							}
			);