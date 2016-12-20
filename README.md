# Exiges

A simple php library to generate and convert degree numbers. It's also compatible with fzaninotto/Faker.

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

use Tamperdata\Exiges\Conversor;

$conversor = new Conversor;

$num = 100;

$result1 = $conversor->celsiusToFahrenheit($num);

$result2 = $conversor->celsiusToKelvin($num);

$result3 = $conversor->fahrenheitToCelsius($num);

$result4 = $conversor->fahrenheitToKelvin($num);

$result5 = $conversor->kelvinToCelsius($num);

$result6 = $conversor->kelvinToFahrenheit($num);
```

### 2 - Generator

```php

use Tamperdata\Exiges\Generator;

$generator = new Generator;

$degree = 'C';
$num1   = 10;
$num2   = 50;

$result = $generator->temperatureForHumans($degree, $num1, $num2);
```
### 3 - Faker
You can also use it with the fantastic Faker library! (It's actually what its designed for)

https://github.com/fzaninotto/Faker

```php
$faker     = \Faker\Factory::create();

$conversor = new \Tamperdata\Exiges\Conversor();
$generator = new \Tamperdata\Exiges\Generator();

$faker->addProvider($generator);
$faker->addProvider($conversor);

$faker->temperatureForHumans('C', -10, 50);
$faker->celsiusToFahrenheit(10);
```

## License

Exiges library is licensed under [The MIT License (MIT)] (https://github.com/tamperdata/exiges/blob/master/LICENSE)(LICENSE).
