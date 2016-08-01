<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Helpers\Contracts\RocketShipContract;

class DemoController extends Controller
{
	public function index(RocketShipContract $rocketShip)
	{
		$boom = $rocketShip->blastOff();

		return view('demo.index', compact('boom'));
	}
}