<?php namespace Sourcescript\LaravelDependencyInjector\Interfaces;

interface DependencyInterface
{
	public function app();
	public function input();
	public function response();	
	public function validator();
}