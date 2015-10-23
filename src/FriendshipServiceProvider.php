<?php

namespace Ghanem\Friendship;

use Illuminate\Support\ServiceProvider;

class FriendshipServiceProvider extends ServiceProvider 
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
	    $this->publishes([
	        __DIR__.'/../database/migrations/' => database_path('migrations')
	    ], 'migrations');
    }
    
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
