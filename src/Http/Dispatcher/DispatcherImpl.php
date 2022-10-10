<?php

namespace App\Http\Dispatcher;

use Psr\Container\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DispatcherImpl implements Dispatcher
{
    /** @var \Psr\Container\ContainerInterface */
    private ContainerInterface $container;

    /**
     * @param  \Psr\Container\ContainerInterface  $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function dispatch(Request $request, string $controller, string $method): Response
    {
        return new Response(call_user_func_array(
            array($this->container->get($controller), $method),
            array($request)
        ));
    }
}
