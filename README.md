# Tamperdata - Exiges

A simple php helper to convert degree numbers, generate and calculate them!

[![Total Downloads](https://poser.pugx.org/tamperdata/exiges/downloads.svg)](https://packagist.org/packages/tamperdata/exiges)
[![Latest Stable Version](https://poser.pugx.org/tamperdata/exiges/v/stable.svg)](https://packagist.org/packages/tamperdata/exiges)
[![Build Status](https://travis-ci.org/tamperdata/exiges.svg?branch=master)](https://travis-ci.org/tamperdata/exiges) 

### Installing
The package installation can be done with composer by the following command:

```shell
composer require tamperdata/exiges
```

Exiges **does not** provides Facades or ServiceProviders, they aren't needed.

## Usage

### 1 - Conversor

```php
<?php

namespace App\MyProject;

use Tamperdata\Exiges\Conversor;

class MyController
{

	public function index()
	{
		$conversor = new Conversor;

		$num = 100;

		$result1 = $conversor->celsiusToFahrenheit($num);
		
		$result2 = $conversor->celsiusToKelvin($num);
		
		$result3 = $conversor->fahrenheitToCelsius($num);
		
		$result4 = $conversor->fahrenheitToKelvin($num);
		
		$result5 = $conversor->kelvinToCelsius($num);
		
		$result6 = $conversor->kelvinToFahrenheit($num);

		dd($result1, $result2, $result3, $result4, $result5, $result6);
	}
}
```

### 2 - Generator

```php
<?php

namespace App\MyProject;

use Tamperdata\Exiges\Generator;

class MyController
{

	public function index()
	{
		$generator = new Generator;

		$result = $generator->temperatureForHumans();

		dd($result);
	}
}

```
