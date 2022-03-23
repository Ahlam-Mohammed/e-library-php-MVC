<?php

namespace Config;

class Router
{
    private $handlers = [];
    private $notFoundHandler;

    const METHOD_POST = 'POST';
    const METHOD_GET  = 'GET';


    public function get(string $path, $handler)
    {
        $this->addHandler(self::METHOD_GET, $path, $handler);
    }

    public function post(string $path, $handler)
    {
        $this->addHandler(self::METHOD_POST, $path, $handler);
    }

    private function addHandler(string $method, string  $path, $handler)
    {
        $this->handlers[$method . $path] = [
            'path'    => $path,
            'method'  => $method,
            'handler' => $handler
        ];
    }

    public function notFoundHandler($handler)
    {
        $this->notFoundHandler = $handler;
    }

    public function run()
    {
        $requestUri  = parse_url($_SERVER['REQUEST_URI']);
        $requestPath = $requestUri['path'];
        $method      = $_SERVER['REQUEST_METHOD'];

        $callback = null;

        foreach ($this->handlers as $handler)
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
            $callback = [$handler,$method];
        }

        if (!$callback) {
            if (!empty($this->notFoundHandler)) {
                $callback = $this->notFoundHandler;
            }
        }

        call_user_func_array($callback, [array_merge($_GET,$_POST)]);
    }
}
