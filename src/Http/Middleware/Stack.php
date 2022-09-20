<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Stack implements StackInterface, MiddlewareInterface
{
    private array $middlewares = [];

    /**
     * @param  array  $middlewares
     */
    public function __construct(array $middlewares)
    {
        $this->middlewares = $middlewares;
    }

    public function process(Request $request, StackInterface $stack): Response
    {
        return new Response('Not Found Middlewares', 404);
    }

    public function next($request, $stack): MiddlewareInterface|Response
    {
        if (0 === count($this->middlewares)) {
            return $this->process($request, $stack);
        }

        $middleware = array_shift($this->middlewares);
        return new $middleware;
    }
}
