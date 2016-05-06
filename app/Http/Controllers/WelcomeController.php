<?php
	namespace App\Http\Controllers;
	
	class WelcomeController extends Controller
	{
		public function _construct()
		{
			$this->middleware('guest');
		}
		
		public function index()
		{
			return 'this is the index method of the Welcome Controller';
		}
		
		public function contact()
		{
			return view('pages/contact');
		}
	}
?>