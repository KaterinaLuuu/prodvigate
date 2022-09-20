<?php

declare(strict_types=1);

namespace App\Services\Http;

use App\Services\Http\Middleware\Stack;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Kernel implements KernelInterface
{
    /** @var array*/
    private array $middlewares;

    /**
     * @param  string[]  $middlewares
     */
    public function __construct(array $middlewares)
    {
        $this->middlewares = $middlewares;
    }

    public function process(Request $request): Response
    {
        $stack = new Stack($this->middlewares);

        return $stack->next()->process($request, $stack);
    }
}
