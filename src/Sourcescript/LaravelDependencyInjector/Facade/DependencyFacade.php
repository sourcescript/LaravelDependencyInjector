<?php namespace Sourcescript\LaravelDependencyInejctor\Facade;

use Illuminate\Support\Facades\Facade;

class DependencyFacade extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'dependency';
	}
}