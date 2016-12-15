<?php

namespace Uself\Exiges;

use Uself\Exiges\Exceptions\InvalidArgumentException;
use Uself\Exiges\Contracts\Conversor as GeneratorContract;

class Conversor implements ConversorContract
{
	/**
	* Convert from degrees Celsius to Fahrenheit
	*
	* @param   int    $int
	* @return  string 10°C (Randomized)
	* @throws  InvalidArgumentException
	*/
	public function celsiusToFahrenheit($int = 0)
	{
		//soon
	}

	/**
	* Convert from degrees Fahrenheit to Celsius
	*
	* @param   int    $int
	* @return  string 10°C (Randomized)
	* @throws  InvalidArgumentException
	*/
	public function fahrenheitToCelsius($int = 0)
	{
		//soon
	}
}