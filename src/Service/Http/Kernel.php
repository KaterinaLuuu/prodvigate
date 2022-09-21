<?php

declare(strict_types=1);

namespace App\Service\Http;

use App\Service\Http\Middleware\Stack;
use Psr\Container\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Kernel implements KernelInterface
{
    /** @var string[] */
    private array $middlewares;

    /** @var \Psr\Container\ContainerInterface */
    private ContainerInterface $container;

    /**
     * @param  string[]                           $middlewares
     * @param  \Psr\Container\ContainerInterface  $container
     */
    public function __construct(array $middlewares, ContainerInterface $container)
    {
        $this->middlewares = $middlewares;
        $this->container   = $container;
    }

    public function process(Request $request): Response
    {
        $stack = new Stack($this->middlewares, $this->container);

        return $stack->next()->process($request, $stack);
    }
}
