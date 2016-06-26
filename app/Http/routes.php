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