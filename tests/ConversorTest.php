<?php

namespace Tamperdata\Exiges\Tests;

use \PHPUnit\Framework\TestCase;
use \Tamperdata\Exiges\Conversor;

class ConversorTest extends \PHPUnit_Framework_TestCase
{
	public function testCelsiusToFahrenheit($value = 10)
	{
		$conversor = new Conversor;

		$this->assertEquals('50°F', $conversor->celsiusToFahrenheit($value));
	}

	public function testCelsiusToKelvin($value = 10)
	{
		$conversor = new \Tamperdata\Exiges\Conversor;

		$this->assertEquals('283.15°K', $conversor->celsiusToKelvin($value));
	}

	public function testFahrenheitToCelsius($value = 10)
	{
		$conversor = new \Tamperdata\Exiges\Conversor;

		$this->assertEquals('-12.2222°C', $conversor->fahrenheitToCelsius($value));
	}

	public function testFahrenheitToKelvin($value = 10)
	{
		$conversor = new \Tamperdata\Exiges\Conversor;

		$this->assertEquals('260.9278°K', $conversor->fahrenheitToKelvin($value));	
	}

	public function testKelvinToCelsius($value = 10)
	{
		$conversor = new \Tamperdata\Exiges\Conversor;

		$this->assertEquals('-263.15°C', $conversor->kelvinToCelsius($value));	
	}

	public function testKelvinToFahrenheit($value = 10)
	{
		$conversor = new \Tamperdata\Exiges\Conversor;

		$this->assertEquals('-441.67°F', $conversor->kelvinToFahrenheit($value));	
	}

}