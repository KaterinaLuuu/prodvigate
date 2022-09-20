<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Services\Http\Middleware\MiddlewareInterface;
use App\Services\Http\Middleware\StackInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class HelloMiddleware implements MiddlewareInterface
{
    public function process(Request $request, StackInterface $stack): Response
    {
        return new Response('Hello World!');
    }
}
