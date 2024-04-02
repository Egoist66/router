<?php

namespace App\RMVC\Route;

class Route
{
    private static array $routesGet = [];

    public static function get(string $route, array $controller): RouteConfig
    {

        $routeConfig = new RouteConfig(
            $route,
            $controller[0],
            $controller[1]
        );
        self::$routesGet[] = $routeConfig;

        return $routeConfig;



    }

    /**
     * @return array
     */
    public static function getRoutesGET(): array
    {
        return self::$routesGet;
    }
}