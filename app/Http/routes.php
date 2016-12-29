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

// Authentication Routes...
Route::get ('auth/login',  'Auth\AuthController@getLogin');
Route::post('auth/login',  'Auth\AuthController@postLogin');
Route::get ('auth/logout', 'Auth\AuthController@logout');

// Registration Routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::get('auth/register', 'Auth\AuthController@postRegister');


Route::get('/', function () 
				{
				    return view('welcome');
				}
		  );

Route::get('/tasks', 'TasksController@index');
Route::post('/tasks', 'TasksController@store');
Route::delete('/tasks/{task}', 'TasksController@destroy');

Route::get('/taskTest', 'TasksController@test')->name('taskTest'); // named Route


Route::group(['as' => 'admin::'],
			 function ()
			 {
				Route::get('dashboard', ['as' => 'dashboard', 
										 function ()
										 {
										  // Route named "admin::dashboard"
										  // redirecting to a named route
										  return redirect()->route("admin::taskTest"); // to access:  http://startingpoint/dashboard
			 							 }
										]
						  );

				Route::get('dashboard1', 'TasksController@test1')->name('taskTest');
			}
		   );

// Service Provider demo route
Route::resource('demo', 'DemoController');

// API Token Test
Route::group(['as' => 'apitokentestgroup::',
			  //'middleware' => '[auth:api, cors]', // using the 'auth' middleware, specifying the 'api' guard
			  'middleware' => '[auth, cors]',
			  'prefix' => 'api',
			 ],
		     function()
		     {
	           Route::post('register', 'ApitokentestController@register');
	           Route::post('login', 'ApitokentestController@login');
	           
	           Route::group(['middleware' => 'jwt-auth'],
	           				function()
	           				{
	           					Route::post('get_user_details', 'ApitokentestController@get_user_details');
	           					Route::resource('apitokentest', 'ApitokentestController');
	           				}
	           			   );
             }
		    );





