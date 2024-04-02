<?php

namespace App\RMVC\Route;

class RouteDispatcher
{

    private string $requestUri = '/';
    private RouteConfig $routeConfig;

    /**
     * @param RouteConfig $routeConfig
     */
    public function __construct(RouteConfig $routeConfig)
    {
        $this->routeConfig = $routeConfig;
    }

    final public function process(): void {
        dump($_SERVER['REQUEST_URI']);
    }

    private function saveRequestUri(): void {
        if($_SERVER['REQUEST_URI'] !== '/') {
            $this->requestUri = $_SERVER['REQUEST_URI'];
        }
    }

    private function cleanRequestUri(string $requestUri): string|array|null
    {
        return preg_replace('/(^\/)|(\/$)/', '', $requestUri);
    }
}