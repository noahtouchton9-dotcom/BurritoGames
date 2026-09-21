<?php

class Router {
    private array $routes = [];

    public function get(string $path, callable $callback): void {
        $this->routes['GET'][$path] = $callback;
    }
    public function post(string $path, callable $callback): void {
        $this->routes['POST'][$path] = $callback;
    }

    public function dispatch(): void {
        $method = $_SERVER['REQUEST_METHOD'];

        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        if (isset($this->routes[$method][$uri])) {
            call_user_func($this->routes[$method][$uri]);
        } else {
            http_response_code(404);
            echo "404 - Page Not Found";
        }
    }
}
