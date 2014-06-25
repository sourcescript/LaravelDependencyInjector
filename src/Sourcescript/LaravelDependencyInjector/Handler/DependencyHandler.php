<?php namespace Sourcescript\LaravelDependencyInjector\Handler;


use Illuminate\Foundation\Application as App;
use Illuminate\Support\Facades\Response;
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
		return $this->app->make('request');
	}

	public function response()
	{
		return new Response;
	}

	public function validator()
	{
		return $this->app->make('validator');
	}
}