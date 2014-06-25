<?php namespace Sourcescript\LaravelDependencyInjector\Interfaces;

interface DependencyInterface
{
	public function app();
	public function auth();
	public function cache();
	public function config();
	public function db();
	public function event();
	public function file();
	public function form();
	public function hash();
	public function html();
	public function input();
	public function redirect();
	public function response();
	public function request();
	public function session();
	public function url();
	public function validator();
	public function view();
}
