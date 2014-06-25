<?php namespace Sourcescript\LaravelDependencyInjector\Handler;


use Illuminate\Foundation\Application as App;
use Sourcescript\LaravelDependencyInjector\Interfaces\DependencyInterface;

class DependencyHandler implements DependencyInterface
{

	protected $app;

	public function __construct($app)
	{
		$this->app = $app;
	}

	public function app()
	{
		return $this->app;
	}

	public function input()
	{
		return $this->app->make('input');
	}

	public function response()
	{
		return $this->app->make('response');
	}

	public function validator()
	{
		return $this->app->make('validator');
	}
}