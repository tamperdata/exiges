<?php

namespace Uself\Exiges;

use Uself\Exiges\Exceptions\InvalidArgumentException;
use Uself\Exiges\Contracts\Conversor as ConversorContract;

class Conversor implements ConversorContract
{
	/**
	* Convert from degrees Celsius to Fahrenheit
	*
	* @param   int    $int
	* @return  string 10°F
	* @throws  InvalidArgumentException
	*/
	public function celsiusToFahrenheit($int = 0)
	{
		$fahrenheit = ( $int * ( 9 / 5 )) + 32;

		return $fahrenheit . '°F';
	}

	/**
	* Convert from degrees Fahrenheit to Celsius
	*
	* @param   int    $int
	* @return  string 10°C
	* @throws  InvalidArgumentException
	*/
	public function fahrenheitToCelsius($int = 0)
	{
		$celsius = ( $int - 32 ) * ( 5 / 9 );

		return $celsius . '°C';
	}
}