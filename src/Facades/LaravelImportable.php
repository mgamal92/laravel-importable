<?php

namespace MG\Importable\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelImportable extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-importable';
    }
}