<?php

declare(strict_types=1);

namespace App\Services\Middleware;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class HelloMiddleware implements MiddlewareInterface
{
    /**
     * @param  \Symfony\Component\HttpFoundation\Request  $request
     * @param  \App\Services\Middleware\StackInterface    $stack
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function process(Request $request, StackInterface $stack): Response
    {
        return new Response("Hello World!");
    }
}
