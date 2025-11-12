<?php
namespace App\Core;

class Router {
    private array $routes = ['GET'=>[], 'POST'=>[]];
    public function get(string $path, callable|array $action): void { $this->routes['GET'][$this->normalize($path)] = $action; }
    public function post(string $path, callable|array $action): void { $this->routes['POST'][$this->normalize($path)] = $action; }
    public function dispatch(string $method, string $uri, Container $c) {
        [$path] = explode('?', $uri, 2);
        foreach ($this->routes[$method] ?? [] as $route => $action) {
            $pattern = preg_replace('#\{([a-zA-Z_][a-zA-Z0-9_]*)\}#', '(?P<$1>[^/]+)', $route);
            if (preg_match('#^'.$pattern.'$#', $this->normalize($path), $m)) {
                $params = array_filter($m, 'is_string', ARRAY_FILTER_USE_KEY);
                if (is_array($action)) {
                    [$class, $method] = $action;
                    $obj = new $class($c);
                    return $obj->{$method}(...array_values($params));
                }
                return $action($c, ...array_values($params));
            }
        }
        http_response_code(404);
        echo '404 Not Found';
    }
    private function normalize(string $p): string { return '/'.trim($p, '/'); }
}