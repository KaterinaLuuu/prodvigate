<?php

declare(strict_types=1);

namespace App\Service\Http\Middleware;

use Psr\Container\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Stack implements StackInterface, MiddlewareInterface
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
        $this->container = $container;
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

        return $this->container->get($middleware);
    }
}
