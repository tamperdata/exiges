<?php

/*
 * This file is part of the Exiges package.
 *
 * (c) Tiago Perrelli <tiagoyg@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tamperdata\Exiges;

use Tamperdata\Exiges\Exceptions\InvalidArgumentException;
use Tamperdata\Exiges\Contracts\Conversor as ConversorContract;

class Conversor implements ConversorContract
{
	/**
	* Convert from Celsius to Fahrenheit
	*
	* @param   int/decimal $number
	* @return  string 	   10°F
	* @throws  InvalidArgumentException
	*/
	public function celsiusToFahrenheit($number = 0)
	{
		$fahrenheit = ( $number * ( 9 / 5 )) + 32;

		return $fahrenheit . '°F';
	}

	/**
	* Convert from Celsius to Kelvin
	*
	* @param   int/decimal $number
	* @return  string 	   10°K
	* @throws  InvalidArgumentException
	*/
	public function celsiusToKelvin($number = 0)
	{
		$kelvin = $number + 273.15;

		return $kelvin . '°K';
	}	

	/**
	* Convert from Fahrenheit to Celsius
	*
	* @param   int/decimal $number
	* @return  string 	   10°C
	* @throws  InvalidArgumentException
	*/
	public function fahrenheitToCelsius($number = 0)
	{
		$celsius = ( $number - 32 ) * ( 5 / 9 );

		return round($celsius, 4) . '°C';
	}

	/**
	* Convert from Fahrenheit to Kelvin
	*
	* @param   int/decimal $number
	* @return  string 	   10°K
	* @throws  InvalidArgumentException
	*/
	public function fahrenheitToKelvin($number = 0)
	{
		$kelvin = ( $number + 459.67 ) * ( 5 / 9 );

		return round($kelvin, 4) . '°K';
	}

	/**
	* Convert from Kelvin to Celsius
	*
	* @param   int/decimal $number
	* @return  string 	   10°C
	* @throws  InvalidArgumentException
	*/
	public function kelvinToCelsius($number = 0)
	{
		$celsius = $number - 273.15;

		return $celsius . '°C';
	}

	/**
	* Convert from Kelvin to Fahrenheit
	*
	* @param   int/decimal $number
	* @return  string 	   10°F
	* @throws  InvalidArgumentException
	*/
	public function kelvinToFahrenheit($number = 0)
	{
		$fahrenheit = ( $number  * ( 9 / 5 )) - 459.67;

		return $fahrenheit . '°F';
	}
}