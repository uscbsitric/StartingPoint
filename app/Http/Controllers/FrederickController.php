<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;

use App\MyRegistries\PaymentGatewayRegistry;

class FrederickController extends Controller
{
	protected $gatewayRegistry;
	
	public function __construct( PaymentGatewayRegistry $registry )
	{
		$this->gatewayRegistry = $registry;
	}
	
	function pay(Request $request)
	{
		$input = $request['input'];

		$this->gatewayRegistry->get( $input )->pay();

		return 'this is the pay function of the FrederickController';
	}
}