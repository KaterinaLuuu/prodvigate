<?php

namespace App\Service\Http\Middleware;

use App\Http\Controller\Index\IndexAction;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Dispatcher\Dispatcher;

class RouteMiddleware implements MiddlewareInterface
{
    /**
     * @param  \App\Http\Dispatcher\Dispatcher  $dispatcher
     */
    public function __construct(Dispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function process(Request $request, StackInterface $stack): Response
    {
        $page = $this->dispatcher->dispatch($request, IndexAction::class, '__invoke');

        return $page;
    }
}
