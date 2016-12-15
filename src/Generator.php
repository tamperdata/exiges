<?php

namespace Uself\Exiges;

use Uself\Exiges\Exceptions\InvalidArgumentException;
use Uself\Exiges\Contracts\Generator as GeneratorContract;

class Generator implements GeneratorContract
{
	/**
	* Generate a random temperature based on those parameters
	*
	* @param   string $degree 
	* @param   int    $int1
	* @param   int    $int2 
	* @return  string 10°C (Randomizes)
	* @throws  InvalidArgumentException
	*/
	public function temperatureForHumans($degree = 'C', $int1 = -300, $int2 = 300)
	{
		if (!in_array($degree, $this->degrees))
		{
			$message = sprintf("");
			throw new InvalidArgumentException($message);
		}

		$value = rand($int1, $int2);
		
		return $value . '°' . $degree;
	}
}