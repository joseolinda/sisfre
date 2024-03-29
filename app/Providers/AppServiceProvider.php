<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Make sure the directory for compiled views exist 
        /*
        if (! is_dir(config('view.compiled'))) { 
            mkdir(config('view.compiled'), 0755, true); 
        }*/
        if($this->app->environment('production')) {
    \URL::forceScheme('https');
}
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /*
        $this->app->bind('path.public', function() {
            return base_path().'/html';
        });
        */
    }
}
