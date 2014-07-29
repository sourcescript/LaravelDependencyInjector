<?php namespace Sourcescript\LaravelDependencyInjector\Handler;


use Illuminate\Foundation\Application as App;
use Illuminate\Support\Facades\Response;
use Sourcescript\LaravelDependencyInjector\Interfaces\DependencyInterface;

class DependencyHandler implements DependencyInterface
{

	/**
	 * App instance
	 * @var Illuminate\Foundation\Application
	 */
	protected $app;

	/**
	 * Class constructor
	 * 
	 * @param Illuminate\Foundation\Application $app
	 */
	public function __construct(App $app)
	{
		$this->app = $app;
	}

	/**
	 * @return Illuminate\Foundation\Application
	 */
	public function app()
	{
		return $this->app;
	}
	
	/**
	 * 
	 */
	public function auth()
	{
		return $this->app->make('auth');
	}
	
	/**
	 * 
	 */
	public function cache()
	{
		return $this->app->make('cache');
	}
	
	/**
	 * 
	 */
	public function config()
	{
		return $this->app->make('config');
	}
	
	/**
	 * 
	 */
	public function db()
	{
		return $this->app->make('db');
	}
	
	/**
	 * 
	 */
	public function event()
	{
		return $this->app->make('event');
	}
	
	/**
	 * 
	 */
	public function file()
	{
		return $this->app->make('file');
	}
	
	/**
	 * 
	 */
	public function form()
	{
		return $this->app->make('form');
	}
	
	/**
	 * 
	 */
	public function hash()
	{
		return $this->app->make('hash');
	}
	
	/**
	 * 
	 */
	public function html()
	{
		return $this->app->make('html');
	}
	
	/**
	 * 
	 */
	public function input()
	{
		return $this->app->make('request');
	}
	
	/**
	 * 
	 */
	public function redirect()
	{
		return $this->app->make('redirect');
	}
	
	/**
	 * 
	 */
	public function response()
	{
		return new Response;
	}
	
	/**
	 * 
	 */
	public function request()
	{
		return $this->app->make('request');
	}
	
	/**
	 * 
	 */
	public function session()
	{
		return $this->app->make('session');
	}
	
	/**
	 * 
	 */
	public function url()
	{
		return $this->app->make('url');
	}
	
	/**
	 * 
	 */
	public function validator()
	{
		return $this->app->make('validator');
	}
	
	/**
	 * 
	 */
	public function view()
	{
		return $this->app->make('view');
	}
	
}
