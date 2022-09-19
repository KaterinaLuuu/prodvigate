<?php

declare(strict_types=1);

namespace App\Services\Middleware;

use JsonException;

class Stack implements StackInterface
{
    private array $middlewares = [
        HelloMiddleware::class,
    ];

    /**
     * @return \App\Services\Middleware\MiddlewareInterface
     * @throws \JsonException
     */
    public function next(): MiddlewareInterface
    {
        if (0 === count($this->middlewares)) {
            throw new JsonException('Not Found Middlewares', 404);
        }

        $middleware = array_shift($this->middlewares);
        return new $middleware;
    }
}
