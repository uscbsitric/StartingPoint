<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}