<?php

namespace App\Http\Dispatcher;

use App\Http\Controller\Index\IndexAction;
use Psr\Container\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Dispatcher implements DispatcherInterface
{
    /** @var array|array[] */
    private array $routes = [
        ['url' => '/', 'controller' => IndexAction::class],
    ];

    /** @var \Psr\Container\ContainerInterface */
    private ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function dispatch(string $url, Request $request): Response
    {
        foreach ($this->routes as $route) {
            if ($url == $route['url']) {
                $container          = $this->container->get($route['controller']);
                $responseController = $container($request);

                return new Response($responseController);
            } else {
                return new Response('Page not found', 404);
            }
        }

        return new Response('Routes not found', 404);
    }
}
