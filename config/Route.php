<?php

namespace App\Config;

class Route
{
    private static $handlers = [];
    private static $notFoundHandler;

    const METHOD_POST = 'POST';
    const METHOD_GET  = 'GET';


    public static function get(string $path, $handler)
    {
        self::addHandler(self::METHOD_GET, $path, $handler);
    }

    public static function post(string $path, $handler)
    {
        self::addHandler(self::METHOD_POST, $path, $handler);
    }

    private static function addHandler(string $method, string  $path, $handler)
    {
        self::$handlers[$method . $path] = [
            'path'    => $path,
            'method'  => $method,
            'handler' => $handler
        ];
    }

    public static function notFoundHandler($handler)
    {
        self::$notFoundHandler = $handler;
    }

    public static function run()
    {
        $requestUri  = parse_url($_SERVER['REQUEST_URI']);
        $requestPath = $requestUri['path'];
        $method      = $_SERVER['REQUEST_METHOD'];

        $callback = null;

        foreach (self::$handlers as $handler)
        {
            if ($handler['path'] === $requestPath && $handler['method'] === $method)
            {
                $callback = $handler['handler'];
            }
        }

        if (is_array($callback)){

            $className = array_shift($callback);
            $handler = new $className;

            $method = array_shift($callback);

            $handler->action = $method;
            $controller = new Controller();
            $controller = $handler;

            $middlewares = $controller->getMiddlewares();

            foreach ($middlewares as $middleware) {
                $middleware->execute();
            }

            $callback = [$handler,$method];

        }

        if (!$callback) {
            if (!empty(self::$notFoundHandler)) {
                $callback = self::$notFoundHandler;
            }
        }

        call_user_func_array($callback, [array_merge($_GET,$_POST)]);

    }
}
