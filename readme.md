#Laravel Dependency Injector For Laravel4


###Why? The Effort
The hardet part of developing applications which should be scalable in Laravel4 is Dependency Injection. Usually, we always have that nuisance of using `Use \Config` or `Use \Response` on our applications. The big Problem there would be scalability.

Assuming Laravel 4 just ported and overhauled to a new framework, or imagine you, as a developer switched from using `sentry` to basic `auth`. What do you do? Scalability and Dependency is always the issue.

###Version 0.0001
Thanks to the other library, SocialConnect, and two big API-Centric applicaitons that I'm building, There's a big problem w/ dependencies. Now, It would be no issue.

###Installation

####Composer
####Facades
```php
    <?php
        ...
            'DependencyInterface' => 'Sourcescript\LaravelDependencyInjector\Facades\DependencyFacade'
        ...
    
    
```

Insert that into the facades array.

**disclosure**: some applications and libraries you may be doing or using would or cannot directly use the Facade due to psr issues. Therefore, they may inser the following:

```php
    <?php
        use Sourcescript\LaravelDependencyInjector\Interfaces\DependencyInterface;
    
```

Rather than `importing` alot of libraries or extensions to your library (from Laravel's Library) you may just need to import the dpependency injector and he'll do the rest


####Providers
```php
    <?php
        ...
        'Sourcescript\LaravelDependencyInjector\LaravelDependencyInjectorServiceProvider'
        ...
```

Insert the following into the providers array


###How to use?
Here's an example of an API-centric controller which uses a better dependency injection w/ our library

```php
    <?php namespace Pupilr\System\Controllers\User;
    
    use Sourcescript\LaravelDependencyInjector\Interfaces\DependencyInterface;
    
    class UserController extends APIController
    {
        protected $dependencies;
        
        public function __construct(DependencyInterface $dependencies)
        {
            $this->dependencies = $dependencies;
        }
        
        public function getIndex()
        {
            $result = [
                'code'      => 200,
                'message'   => 'hello world'
            ];
            
            return $this->dependencies->response->json($result)->setCallback($this->dependencies->input->get('callback'));
        }
    }
```

as you can see, even tho its a bit wee long, its cleaner and easier to recode and revamp, you won't have the hassle of editing all one by one.
###Dependencies Available

```php
    <?php
        $dependencies;

        $dependencies->app();
        $dependencies->auth();
        $dependencies->cache();
        $dependencies->config();
        $dependencies->db();
        $dependencies->event();
        $dependencies->file();
        $dependencies->form();
        $dependencies->hash();
        $dependencies->html();
        $dependencies->input();
        $dependencies->redirect();
        $dependencies->response();
        $dependencies->request();
        $dependencies->session();
        $dependencies->url();
        $dependencies->validator();
        $dependencies->view();

```

###Issue w/ Overahead
This application / library will not give much of an overhead to the current cache or memory needed by hte application since every requirement is lazy loaded by app. (see code)

###Future Fixes
1. Artisan Task: For Creating New Dependencies

###Credits
Credits go to Kier & Jeff (both are which my friends) on pointing out an err, and helping me generate a better plugin

Also, to SourceScript Innovations, this will and always be made w/ love.
