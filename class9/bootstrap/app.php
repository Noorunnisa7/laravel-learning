<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\Country;
use App\Http\Middleware\GroupData;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // global middleware
        $middleware->append(CheckAge::class);
        // $middleware->append(Country::class);

        // route middleware
        // $middleware->appendToGroup('CheckCountry', Country::class);

        $middleware->appendToGroup('CheckData', [
            Country::class,
            GroupData::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
