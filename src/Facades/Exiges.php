<?php

namespace Uself\Exiges\Facades;

use Illuminate\Support\Facades\Facade;

class Exiges extends Facade
{
	protected static function getFacadeAccessor()
    {
        return 'exiges';
    }
}