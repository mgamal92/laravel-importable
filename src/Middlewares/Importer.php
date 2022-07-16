<?php

namespace MG\Importable\Middlewares;

use Closure;
use Illuminate\Support\Facades\Bus;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Importer
{
    public function handle($request, Closure $next)
    {
        collect($request->allFiles())
            ->flatten()
            ->filter(function (UploadedFile $file) {
                return ($file->getClientOriginalExtension() === 'csv') && $file->isValid();
            })
            ->each(function (UploadedFile $file) {
                // Start importing csv files
            });

        return $next($request);
    }
}