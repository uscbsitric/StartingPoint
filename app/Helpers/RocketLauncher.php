<?php

namespace app\Helpers;

use App\Helpers\Contracts\RocketShipContract;

class RocketLauncher implements RocketShipContract
{
	public function blastOff()
	{
		return 'Houstonm we have launched!';
	}
}