<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\MyRegistries\PaymentGatewayRegistry;
use App\MyConcreteClasses\PaypalPaymentGateway;
use App\MyConcreteClasses\SomeOtherPaymentGateway;

class PaymentServiceProvider extends ServiceProvider
{
	function register()  // binding location
	{
		$this->app->singleton( PaymentGatewayRegistry::class );
	}
	
	function boot()  // all other service providers are available
	{
		$this->app->make( PaymentGatewayRegistry::class )
		          ->register('PayPal', new PaypalPaymentGateway('theAPIKey12341'))
		          ->register('SomeOther', new SomeOtherPaymentGateway('theAPIKey12342'));
	}
}