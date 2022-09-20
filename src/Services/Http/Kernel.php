<?php

declare(strict_types=1);

namespace App\Services\Http;

use App\Http\Middleware\Stack;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Kernel implements KernelInterface
{
    private array $middlewares = [];

    /**
     * @param  array  $middlewares
     */
    public function __construct(array $middlewares)
    {
        $this->middlewares = $middlewares;
    }

    public function process(Request $request): Response
    {
        $stack = new Stack($this->middlewares);

        return $stack->next($request, $stack)->process($request, $stack);
    }
}
