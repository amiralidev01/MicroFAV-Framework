<?php namespace app\Middleware;

use app\Middleware\Contract\MiddlewareInterface;

class BlockFirefox implements MiddlewareInterface
{
    public function handle()
    {
        // TODO: Implement handle() method.
        global $request;
//        die("BlockFirefox!");
        if ($request->agent() !== null) {
            $agent = $request->agent();
            if (strlen(strstr($agent, 'Firefox')) > 0) {
                die("You cannot use the Firefox browser!");
            }
        }
    }
}