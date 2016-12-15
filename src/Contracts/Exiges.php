<?php

namespace Uself\Exiges\Contracts;

interface Exiges
{
	/**
	*
	* Generate a random temperature based on those parameters
	*
	* @param   string $degree 
	* @param   int    $in1 
	* @param   int    $int2 
	* @return  string 10°C (Randomizes)
	* @throws  InvalidArgumentException
	*/
	public function temperatureForHumans($degree = 'C', $int1 = -300, $int2 = 300);

	/**
	*
	* Convert from degrees Celsius to Fahrenheit
	*
	* @param   string $unit 
	* @param   int    $in1 
	* @return  string 10°C (Randomizes)
	* @throws  InvalidArgumentException
	*/
	public function celsiusToFahrenheit($int1 = 0);

	/**
	*
	* Convert from degrees Fahrenheit to Celsius
	*
	* @param   string $unit 
	* @param   int    $in1 
	* @return  string 10°C (Randomizes)
	* @throws  InvalidArgumentException
	*/
	public function fahrenheitToCelsius($int1 = 0); 
}