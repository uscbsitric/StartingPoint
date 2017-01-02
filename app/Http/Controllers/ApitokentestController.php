<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use JWTAuth;

class ApitokentestController extends Controller
{
	public function index()
	{
		return response()->json(['result' => 'This is the result from the INDEX function of the ApitokentestController']);
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
		return response()->json(['result' => 'This is the result from the get_user_details function of the ApitokentestController']);
	}
	
	public function register(Request $request)
	{
		$input = $request->all();
		$input['password'] = Hash::make($input['password']);
		$result = User::create($input);

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
}