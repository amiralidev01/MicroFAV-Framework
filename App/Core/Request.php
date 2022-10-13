<?php namespace app\Core;

use JetBrains\PhpStorm\NoReturn;

class Request
{
    private array $params;
    private mixed $method;
    private mixed $agent;
    private mixed $ip;

    public function __construct()
    {
        $this->params = $_REQUEST;  # params
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->agent = $_SERVER['HTTP_USER_AGENT'];
        $this->ip = $_SERVER['REMOTE_ADDR'];
    }

    /**
     * @param string $name
     * @return mixed|null
     */
    public function __get(string $name)
    {
        return $this->params[$name] ?? null;
    }

    /**
     * @return array
     */
    public function params(): array
    {
        return $this->params;
    }

    /**
     * @return mixed
     */
    public function method(): mixed
    {
        return $this->method;
    }

    /**
     * @return mixed
     */
    public function agent(): mixed
    {
        return $this->agent;
    }

    /**
     * @return mixed
     */
    public function ip(): mixed
    {
        return $this->ip;
    }

    /**
     * @param $key
     * @return mixed
     */
    public function input($key): mixed
    {
        return $this->params[$key] ?: null;
    }

    /**
     * @param $key
     * @return bool
     */
    public function isset($key): bool
    {
        return isset($this->params[$key]);
    }

    /**
     * @param $route
     * @return void
     */
    #[NoReturn] public function redirect($route): void
    {
        header("Location: " . $route);
        die;
    }
}