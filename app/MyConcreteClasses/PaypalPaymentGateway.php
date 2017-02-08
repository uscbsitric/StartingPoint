<?php
namespace App\MyConcreteClasses;

use App\MyInterfaces\PaymentGateway;

class PaypalPaymentGateway implements PaymentGateway
{
	protected $apiKey;
	
	public function __construct($apiKey)
	{
		$this->apiKey = $apiKey;
	}
	
	public function pay()
	{
		echo "<pre>";
		echo 'this is the pay function of PayPalPaymentGateway';
		exit();
	}
}