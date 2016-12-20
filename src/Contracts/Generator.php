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

interface Generator
{
	/**
	* Generate a random temperature based on those parameters
	*
	* @param   string $degree 
	* @param   int    $number1 
	* @param   int    $number2 
	* @return  string 10°C
	* @throws  InvalidArgumentException
	*/
	public function temperatureForHumans($degree = 'C', $number1 = -300, $number2 = 300);
}