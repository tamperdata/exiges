<?php

/*
 * This file is part of the Exiges package.
 *
 * (c) Tiago Perrelli <tiagoyg@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tamperdata\Exiges\Contracts;

interface Conversor
{
	/**
	* Convert from Celsius to Fahrenheit
	*
	* @param   int/decimal $number
	* @return  string 	   10°F
	* @throws  InvalidArgumentException
	*/
	public function celsiusToFahrenheit($number = 0);

	/**
	* Convert from Celsius to Kelvin
	*
	* @param   int/decimal $number
	* @return  string 	   10°K
	* @throws  InvalidArgumentException
	*/
	public function celsiusToKelvin($number = 0); 	

	/**
	* Convert from Fahrenheit to Celsius
	*
	* @param   int/decimal $number
	* @return  string 	   10°C
	* @throws  InvalidArgumentException
	*/
	public function fahrenheitToCelsius($number = 0); 

	/**
	* Convert from Fahrenheit to Kelvin
	*
	* @param   int/decimal $number
	* @return  string 	   10°K
	* @throws  InvalidArgumentException
	*/
	public function fahrenheitToKelvin($number = 0);

	/**
	* Convert from Kelvin to Celsius
	*
	* @param   int/decimal $number
	* @return  string 	   10°C
	* @throws  InvalidArgumentException
	*/
	public function kelvinToCelsius($number = 0);

	/**
	* Convert from Kelvin to Fahrenheit
	*
	* @param   int/decimal $number
	* @return  string 	   10°F
	* @throws  InvalidArgumentException
	*/
	public function kelvinToFahrenheit($number = 0);	
}