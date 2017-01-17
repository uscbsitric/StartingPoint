<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use JWTAuth;
use App\Role;
use App\Permission;

class ApitokentestController extends Controller
{
	public function index( Request $request
						 )
	{
		$input = $request->all();
		$user = JWTAuth::toUser($input['token']);
		
		if($user->can('can-do-everything'))
		{
			return response()->json(['result' => 'This is the result from the INDEX function of the ApitokentestController',
									'data1' => $input['data1'],
									'data2' => $input['data2'],
									'data3' => $input['data3'],
									'data4' => $input['data4'],
							]);
		}
		
		return response()->json(['result' => 'This is the result from the INDEX function of the ApitokentestController, ACCCESS DENIED',
								]);
	}
	
	public function store()
	{
		return response()->json(['result' => 'This is the result from the STORE function of the ApitokentestController']);
	}
	
	public function create()
	{
		return response()->json(['result' => 'This is the result from the CREATE function of the ApitokentestController']);
	}
	
	public function show()
	{
		return response()->json(['result' => 'This is the result from the SHOW function of the ApitokentestController']);
	}
	
	public function update()
	{
		return response()->json(['result' => 'This is the result from the UPDATE function of the ApitokentestController']);
	}
	
	public function destroy()
	{
		return response()->json(['result' => 'This is the result from the DESTROY function of the ApitokentestController']);
	}
	
	public function edit()
	{
		return response()->json(['result' => 'This is the result from the EDIT function of the ApitokentestController']);
	}
	
	public function get_user_details()
	{
		$input = $request->all();
		$user = JWTAuth::toUser($input['token']);
		return response()->json(['result' => $user]);

		//return response()->json(['result' => 'This is the result from the get_user_details function of the ApitokentestController']);
	}
	
	public function register(Request $request)
	{
		$input = $request->all();
		$input['password'] = Hash::make($input['password']);
		$input['role'] = 2; // default role code

		$result = User::create($input);

		// assign a role and permission set to the newly created user
		
		// assign a role and permission set to the newly created user

		return response()->json(['result'=>true]);
	}
	
	public function login(Request $request)
	{
		$input = $request->all();

		if (!$token = JWTAuth::attempt($input))
		{
			return response()->json(['result' => 'wrong email or password.']);
		}
		return response()->json(['result' => $token]);
	}
	
	// test changes
}