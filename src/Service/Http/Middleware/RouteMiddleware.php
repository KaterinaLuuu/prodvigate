<?php

namespace App\Service\Http\Middleware;

use App\Http\Controller\Index\IndexAction;
use App\Http\Dispatcher\Dispatcher;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RouteMiddleware implements MiddlewareInterface
{
    /** @var \App\Http\Dispatcher\Dispatcher */
    private Dispatcher $dispatcher;

    /**
     * @param  \App\Http\Dispatcher\Dispatcher  $dispatcher
     */
    public function __construct(Dispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function process(Request $request, StackInterface $stack): Response
    {
        return $this->dispatcher->dispatch($request, IndexAction::class, '__invoke');
    }
}
