<?php

namespace Sahadat\Sfaq;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Sahadat\Sfaq\View\Components\Admin;
use Sahadat\Sfaq\View\Components\Master;
use Sahadat\Sfaq\View\Components\Section;

class SfaqServiceProvider extends ServiceProvider
{
 
    public function boot(){

        $this->registerViews();
        $this->registerRoutes();
        $this->registerMigrations();
       
        $this->loadViewComponentsAs('sfaq', [
            Master::class,
            Section::class,
            Admin::class

          ]);

        // Blade::component('sfaq::layout', 'form-button');

        if ($this->app->runningInConsole()) 
          
          {

            // Publish assets

            $this->publishes([
              __DIR__.'/../public' => public_path('vendor/sfaq'),
            ], ['sfaq-assets', 'laravel-assets']);
          
          }


          Route::middlewareGroup('session_message', ['web', \Illuminate\View\Middleware\ShareErrorsFromSession::class]);

    }



    public function register(){


    }


    private function registerRoutes()
    {

      Route::group($this->routeConfiguration(), function () {

            $this->loadRoutesFrom(__DIR__.'/Http/routes.php'); 
      });    
        
    }

    private function routeConfiguration(){
        return [
            'middleware' => 'session_message'
        ];
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

    

    


    

}