<?php

namespace splittlogic\fw;

use Illuminate\Support\ServiceProvider;

class fwServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {

      $this->loadViewsFrom(__DIR__.'/../resources/views', 'fw');
  		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
      /*
       * Optional methods to load your package assets
       */
       // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

  		if ($this->app->runningInConsole()) {
  			$this->bootForConsole();
  		}

    }

    /**
     * Register the application services.
     */
    public function register()
    {

      $this->mergeConfigFrom(__DIR__.'/../config/fw.php', 'fw');

  		$this->app->singleton('fw', function ($app) {
  			return new fw;
  		});

    }

    public function provides()
  	{

  		return ['fw'];

  	}

    protected function bootForConsole()
  	{

  		// Publishing the configuration file.
  		$this->publishes([
  			__DIR__.'/../config/fw.php' => config_path('fw.php'),
  		], 'fw.config');

  		// Publishing the views.
      $this->publishes([
          __DIR__.'/../resources/views' => base_path('resources/views/vendor/splittlogic'),
      ], 'fw.views');

      // Publishing assets.
      $this->publishes([
          __DIR__.'/../resources/assets' => public_path('vendor/splittlogic'),
      ], 'public');

  	}
}
