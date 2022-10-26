<?php namespace app\Middleware;

use app\Middleware\Contract\MiddlewareInterface;

class BlockFirefox implements MiddlewareInterface
{
    public function handle()
    {
        // TODO: Implement handle() method.
        global $request;

        var_dump($request);
    }
}