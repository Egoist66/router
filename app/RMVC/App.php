<?php

namespace App\RMVC;
use App\RMVC\Route\Route;
use App\RMVC\Route\RouteDispatcher;

class App
{
    /**
     * Runs the Application
     * @param callable $callback
     * @return void
     */
    public static function run(callable $callback): void
    {


        foreach (Route::getRoutesGET() as $routeConfig) {
            $routeDispatcher = new RouteDispatcher($routeConfig);
            $routeDispatcher->process();
        }

        $callback();




    }
}

