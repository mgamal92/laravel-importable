<?php

namespace MG\Importable;

use Illuminate\Support\ServiceProvider;
use MG\Importable\Middlewares\Importer;

class ImportableServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $router = $this->app['router']
            ->pushMiddlewareToGroup('web', Importer::class);
    }
}