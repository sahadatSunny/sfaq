<?php

namespace Sahadat\Sfaq;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class SfaqServiceProvider extends ServiceProvider
{
 
    public function boot(){

        $this->registerRoutes();

    }



    public function register(){



    }


    private function registerRoutes()
    {
        // Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
        // });
    }
    

}