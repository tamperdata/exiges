<?php

namespace Uself\Exiges;

use Exiges\Exceptions\InvalidArgumentException;
use Exiges\Contracts\Exiges as ExigesContract;

class Exiges implements ExigesContract
{
	/**
	* 
	* Degree list 
	*
	* @var array $degrees
	*/
	protected $degrees = ['C', 'F', 'K'];

	/**
	*
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
			$message = sprintf("")
			throw new InvalidArgumentException($message);
		}

		$value = rand($int1, $int2);
		
		return $value . '°' . $degree;
	}

	/**
	*
	* Convert from degrees Celsius to Fahrenheit
	*
	* @param   string $unit 
	* @param   int    $int
	* @return  string 10°C (Randomizes)
	* @throws  InvalidArgumentException
	*/
	public function celsiusToFahrenheit($int = 0)
	{
		//soon
	}

	/**
	*
	* Convert from degrees Fahrenheit to Celsius
	*
	* @param   string $unit 
	* @param   int    $in1 
	* @return  string 10°C (Randomizes)
	* @throws  InvalidArgumentException
	*/
	public function fahrenheitToCelsius($int = 0)
	{
		//soon
	}
}