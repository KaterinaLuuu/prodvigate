<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Symfony\Component\HttpFoundation\Response;

interface StackInterface
{
    /**
     * @param $request
     * @param $stack
     *
     * @return \App\Http\Middleware\MiddlewareInterface|\Symfony\Component\HttpFoundation\Response
     */
    public function next($request, $stack): MiddlewareInterface|Response;
}
