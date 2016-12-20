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
use Tamperdata\Exiges\Contracts\Generator as GeneratorContract;

class Generator implements GeneratorContract
{
	/**
	* Temperature degrees array
	*
	* @var array $degrees
	*/
	protected $degrees = ['C', 'F', 'K'];

	/**
	* Generate a random temperature based on those parameters
	*
	* @param   string $degree 
	* @param   int    $number1
	* @param   int    $number2 
	* @return  string 10°C
	* @throws  InvalidArgumentException
	*/
	public function temperatureForHumans($degree = 'C', $number1 = -300, $number2 = 300)
	{
		if (!in_array($degree, $this->degrees))
		{
			$message = sprintf("To use this function please fill the first parameter with C, F or K.");
			throw new InvalidArgumentException($message);
		}

		$value = rand($number1, $number2);
		
		return $value . '°' . $degree;
	}
}