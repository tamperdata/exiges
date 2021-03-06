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

class ConversorTest extends \PHPUnit_Framework_TestCase
{
	protected $conversor;

	protected function setUp()
	{
		$this->conversor = new Conversor;
	}

	public function testCelsiusToFahrenheit($value = 10)
	{
		$this->assertEquals('50°F', $this->conversor->celsiusToFahrenheit($value));
	}

	public function testCelsiusToKelvin($value = 10)
	{
		$this->assertEquals('283.15°K', $this->conversor->celsiusToKelvin($value));
	}

	public function testFahrenheitToCelsius($value = 10)
	{
		$this->assertEquals('-12.2222°C', $this->conversor->fahrenheitToCelsius($value));
	}

	public function testFahrenheitToKelvin($value = 10)
	{
		$this->assertEquals('260.9278°K', $this->conversor->fahrenheitToKelvin($value));	
	}

	public function testKelvinToCelsius($value = 10)
	{
		$this->assertEquals('-263.15°C', $this->conversor->kelvinToCelsius($value));
	}

	public function testKelvinToFahrenheit($value = 10)
	{
		$this->assertEquals('-441.67°F', $this->conversor->kelvinToFahrenheit($value));	
	}
}