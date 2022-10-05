<?php

namespace App\Http\Dispatcher;

use Psr\Container\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Dispatcher implements DispatcherInterface
{
    /** @var \Psr\Container\ContainerInterface */
    private ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function dispatch(Request $request, string $controller, string $method): Response
    {
        $controller = $this->container->get($controller);
        return new Response($controller->$method($request));
    }
}
