<?php
// src/QueryBuilderPackageServiceProvider.php

namespace Emmanuel\Querybuilderpackage;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class QueryBuilderPackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerRoutes();
    }

    /**
     * Register the package routes.
     *
     * @return void
     */
    protected function registerRoutes()
    {
        Route::get('auto-package-route', 'Emmanuel\Querybuilderpackage\QueryBuilderPackageController@index');
    }
}
