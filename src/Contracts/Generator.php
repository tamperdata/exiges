<?php

namespace Tamperdata\Exiges\Contracts;

interface Generator
{
	/**
	* Generate a random temperature based on those parameters
	*
	* @param   string $degree 
	* @param   int    $int1 
	* @param   int    $int2 
	* @return  string 10°C (Randomized)
	* @throws  InvalidArgumentException
	*/
	public function temperatureForHumans($degree = 'C', $int1 = -300, $int2 = 300);
}