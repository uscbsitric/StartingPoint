<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class TaskRequest extends Request
{
	public function authorize()
	{
		// with a sort of membership system, you can do something like 
		// Auth::user()->userType to check what type of user to see if the type is allowed to do such operation, like ACL
		
		return true;
	}
	
	public function rules()
	{
		return ['name' => 'required|min:5'];
	}
}