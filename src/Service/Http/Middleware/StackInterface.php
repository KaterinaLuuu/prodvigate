<?php

declare(strict_types=1);

namespace App\Service\Http\Middleware;

interface StackInterface
{
    /**
     * @return \App\Service\Http\Middleware\MiddlewareInterface
     */
    public function next(): MiddlewareInterface;
}
