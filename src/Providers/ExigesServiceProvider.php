<?php

namespace Uself\Exiges\Providers;

use Illuminate\Support\ServiceProvider;
use Uself\Exiges\Exiges;
use Uself\Exiges\Contracts\Exiges as ExigesContract;

class ExigesServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    //protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    	$this->app->bind(ExigesContract::class, Exiges::class);

    	$this->app->singleton('exiges', function($app) {

    		return new Exiges();
    	});
    }
}