<?php
namespace App\MyInterfaces;
use App\User;


interface PaymentGateway
{
	function pay(User $payee, Order $oder);
}