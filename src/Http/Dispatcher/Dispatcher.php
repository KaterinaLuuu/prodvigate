<?php

namespace App\Http\Dispatcher;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

interface Dispatcher
{
    /**
     * @param  \Symfony\Component\HttpFoundation\Request  $request
     * @param  string                                     $controller
     * @param  string                                     $method
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function dispatch(Request $request, string $controller, string $method): Response;
}
