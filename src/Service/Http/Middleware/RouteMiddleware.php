<?php

namespace App\Service\Http\Middleware;

use Psr\Container\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Dispatcher\Dispatcher;

class RouteMiddleware implements MiddlewareInterface
{
    /**
     * @param  \Psr\Container\ContainerInterface  $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function process(Request $request, StackInterface $stack): Response
    {
        $requestUrl = $request->getRequestUri();
        $dispatcher = $this->container->get(Dispatcher::class);
        $page       = $dispatcher->dispatch($requestUrl, $request)->getContent();

        return new Response($page);
    }
}
