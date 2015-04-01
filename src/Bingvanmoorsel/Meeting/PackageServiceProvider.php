<?php namespace Bingvanmoorsel\Meeting;




use Illuminate\Routing\Router;
use VictoryCms\Core\Providers\PackageServiceProvider as ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{

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
		//
	}

    public function boot()
    {
        echo 'boot';

        $this->routes(function(Router $router){
            $router->get('/', function(){

            });
        });
    }

    public function install()
    {
        echo 'install';
    }

    public function update()
    {
        echo 'update';
    }

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}

}
