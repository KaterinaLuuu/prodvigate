<?php

declare(strict_types=1);

namespace App\Service\Http\Middleware;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Stack implements StackInterface, MiddlewareInterface
{
    /** @var string[] */
    private array $middlewares;

    /**
     * @param  string[]  $middlewares
     */
    public function __construct(array $middlewares)
    {
        $this->middlewares = $middlewares;
    }

    public function process(Request $request, StackInterface $stack): Response
    {
        return new Response('Not Found Middlewares', 404);
    }

    public function next(): MiddlewareInterface
    {
        if (0 === count($this->middlewares)) {
            return $this;
        }

        $middleware = array_shift($this->middlewares);
        return new $middleware;
    }
}
