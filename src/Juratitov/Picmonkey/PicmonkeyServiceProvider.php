<?php

namespace Juratitov\Picmonkey;

use Illuminate\Support\ServiceProvider;

class PicmonkeyServiceProvider extends ServiceProvider
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
        // Bind a new singleton instance of PicMonkey to the app
		$this->app->singleton('picmonkey', function() {			
			// Inject dependencies
			return new Picmonkey(\Config::get('picmonkey::config'));
		});	
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('juratitov/picmonkey', 'picmonkey');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('picmonkey');
    }

}
