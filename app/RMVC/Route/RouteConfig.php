<?php

namespace App\RMVC\Route;



final readonly class RouteConfig
{
    private string $route;
    private string $controller;
    private string $action;
    private string $name;
    private string $middleware;

    /**
     * RouteConfig constructor.
     * @param string $route
     * @param string $controller
     * @param string $action
     */
    public function __construct(string $route, string $controller, string $action)
    {
        $this->route = $route;
        $this->controller = $controller;
        $this->action = $action;
    }

    public function name(string $name): self {
        $this->name = $name;
        return $this;
    }

    public function middleware(string $middleware): self {
        $this->middleware = $middleware;

        return $this;
    }


}

