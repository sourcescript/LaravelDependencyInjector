<?php namespace Sourcescript\LaravelDependencyInjector;

use Illuminate\Support\ServiceProvider;

use Sourcescript\LaravelDependencyInjector\Handler\DependencyHandler;
use Sourcescript\LaravelDependencyInjector\Interfaces\DependencyInterface;

class LaravelDependencyInjectorServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$app = $this->app;

		$app->bind(
				'Sourcescript\LaravelDependencyInjector\Interfaces\DependencyInterface',
				function($app)
				{
					return new DependencyHandler($app);
				}
			);

		$app['dependency'] = $this->app->share(function($app) 
		{
			return new DependencyInterface;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
