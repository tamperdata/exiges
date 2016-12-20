<?php

/*
 * This file is part of the Exiges package.
 *
 * (c) Tiago Perrelli <tiagoyg@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tamperdata\Exiges\Tests;

use \PHPUnit\Framework\TestCase;
use Tamperdata\Exiges\Conversor;

class ConversorProviderTest extends \PHPUnit_Framework_TestCase
{
	protected $faker;
	protected $conversor;

	protected function setUp()
	{
		$this->faker     = \Faker\Factory::create();
		$this->conversor = new \Tamperdata\Exiges\Conversor();

		$this->faker->addProvider($this->conversor);
	}

	public function testCelsiusToFahrenheit($value = 10)
	{	
		$this->assertEquals('50°F', $this->faker->celsiusToFahrenheit(10));
	}

	public function testCelsiusToKelvin($value = 10)
	{
		$this->assertEquals('283.15°K', $this->faker->celsiusToKelvin($value));
	}

	public function testFahrenheitToCelsius($value = 10)
	{
		$this->assertEquals('-12.2222°C', $this->faker->fahrenheitToCelsius($value));
	}

	public function testFahrenheitToKelvin($value = 10)
	{
		$this->assertEquals('260.9278°K', $this->faker->fahrenheitToKelvin($value));	
	}

	public function testKelvinToCelsius($value = 10)
	{
		$this->assertEquals('-263.15°C', $this->faker->kelvinToCelsius($value));
	}

	public function testKelvinToFahrenheit($value = 10)
	{
		$this->assertEquals('-441.67°F', $this->faker->kelvinToFahrenheit($value));	
	}	
}