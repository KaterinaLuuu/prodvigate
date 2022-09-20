<?php

declare(strict_types=1);

namespace App\Service\Http\Middleware;

use Symfony\Component\HttpFoundation\Response;

interface StackInterface
{
    /**
     * @return \App\Service\Http\Middleware\MiddlewareInterface|\Symfony\Component\HttpFoundation\Response
     */
    public function next(): MiddlewareInterface|Response;
}
