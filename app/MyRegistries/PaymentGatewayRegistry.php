<?php
namespace App\MyRegistries;

use App\MyInterfaces\PaymentGateway;

class PaymentGatewayRegistry
{
	protected $gateways = [];
	
	function register($name, PaymentGateway $instance)
	{
		$this->gateways[$name] = $instance;
		
		return $this;
	}
	
	function get($name)
	{
		if( array_key_exists($name, $this->gateways) )
		{
			return $this->gateways[$name];
		}
		else
		{
			throw new Exception('Invalid Gateway');
		}

		return $this->gateways[$name];
	}
	
	function getAll()
	{
		return $this->gateways;
	}
}