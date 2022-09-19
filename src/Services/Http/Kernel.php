<?php

declare(strict_types=1);

namespace App\Services\Http;

use App\Services\Middleware\PassMiddleware;
use App\Services\Middleware\Stack;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Kernel implements KernelInterface
{
    /**
     * @param  \Symfony\Component\HttpFoundation\Request  $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function process(Request $request): Response
    {
        $stack = new Stack();
        $pass = new PassMiddleware();

        return $pass->process($request, $stack);
    }
}
