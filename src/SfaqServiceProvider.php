<?php

namespace Sahadat\Sfaq;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Sahadat\Sfaq\View\Components\admin\Master;

class SfaqServiceProvider extends ServiceProvider
{
 
    public function boot(){

        $this->registerViews();
        $this->registerRoutes();
        $this->registerMigrations();
        $this->registerComponents();



        $this->loadViewComponentsAs('sfaq', [
            Master::class,
            
          ]);



        if ($this->app->runningInConsole()) 
          
          {

            // Publish assets

            $this->publishes([
              __DIR__.'/../public' => public_path('vendor/sfaq'),
            ], ['sfaq-assets', 'laravel-assets']);
          
          }

    }



    public function register(){



    }


    private function registerRoutes()
    {
       
            $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
        
    }

    private function registerViews()
    {
        // Route::group($this->routeConfiguration(), function () {
            $this->loadViewsFrom(__DIR__.'/../resources/views', 'sfaq');
        // });
    }

    private function registerMigrations()
    {
        
            $this->loadMigrationsFrom(__DIR__.'/../database/migrations', 'sfaq');
        
    }

    private function registerComponents()
    {
        
            $this->loadViewComponentsAs('sfaq', [

                Master::class

            ]);
        
    }
    

}