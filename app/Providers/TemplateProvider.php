<?php

namespace App\Providers;

use App\Models\Config;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class TemplateProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('front.layout.header', function($view){
            $configKeys = ['title', 'caption'];
            
            $config = Config::whereIn('name', $configKeys)->pluck('value', 'name');

            $view->with('config', $config);
        });

        View::composer('front.layout.template', function($view){
            $configKeys = ['fb', 'wa', 'ig', 'dc', 'msg', 'web', 'footle1', 'footle2', 'footle3', 'footle4', 'footdesc1', 'footdesc2', 'footdesc3', 'footdesc4', 'license', 'copyright'];
            
            $config = Config::whereIn('name', $configKeys)->pluck('value', 'name');

            $view->with('config', $config);
        });
    }
}
