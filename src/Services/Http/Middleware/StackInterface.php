<?php

declare(strict_types=1);

namespace App\Services\Http\Middleware;

use Symfony\Component\HttpFoundation\Response;

interface StackInterface
{
    /**
     * @return \App\Services\Http\Middleware\MiddlewareInterface|\Symfony\Component\HttpFoundation\Response
     */
    public function next(): MiddlewareInterface|Response;
}
