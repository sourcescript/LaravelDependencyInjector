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
        return $this->app['auth'];
    }
    
    /**
     * 
     */
    public function cache()
    {
        return $this->app['cache'];
    }
    
    /**
     * 
     */
    public function config()
    {
        return $this->app['config'];
    }
    
    /**
     * 
     */
    public function db()
    {
        return $this->app['db'];
    }
    
    /**
     * 
     */
    public function event()
    {
        return $this->app['event'];
    }
    
    /**
     * 
     */
    public function file()
    {
        return $this->app['file'];
    }
    
    /**
     * 
     */
    public function form()
    {
        return $this->app['form'];
    }
    
    /**
     * 
     */
    public function hash()
    {
        return $this->app['hash'];
    }
    
    /**
     * 
     */
    public function html()
    {
        return $this->app['html'];
    }
    
    /**
     * 
     */
    public function input()
    {
        return $this->app['request'];
    }
    
    /**
     * 
     */
    public function redirect()
    {
        return $this->app['redirect'];
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
        return $this->app['request'];
    }
    
    /**
     * 
     */
    public function session()
    {
        return $this->app['session'];
    }
    
    /**
     * 
     */
    public function url()
    {
        return $this->app['url'];
    }
    
    /**
     * 
     */
    public function validator()
    {
        return $this->app['validator'];
    }
    
    /**
     * 
     */
    public function view()
    {
        return $this->app['view'];
    }
    
}
