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
use Tamperdata\Exiges\Generator;

class GeneratorTest extends \PHPUnit_Framework_TestCase
{
	protected $faker;
	protected $generator;

	protected function setUp()
	{
		$this->faker     = \Faker\Factory::create();
		$this->generator = new \Tamperdata\Exiges\Generator();

		$this->faker->addProvider($this->generator);
	}

	public function testTemperatureForHumans()
	{
		$this->assertInternalType('string', $this->faker->temperatureForHumans());
	}
}