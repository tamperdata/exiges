<?php

namespace Uself\Exiges\Contracts;

interface Conversor
{
	/**
	* Convert from degrees Celsius to Fahrenheit
	*
	* @param   int    $int
	* @return  string 10°C (Randomized)
	* @throws  InvalidArgumentException
	*/
	public function celsiusToFahrenheit($int = 0);

	/**
	* Convert from degrees Fahrenheit to Celsius
	*
	* @param   int    $int
	* @return  string 10°C (Randomized)
	* @throws  InvalidArgumentException
	*/
	public function fahrenheitToCelsius($int = 0); 
}