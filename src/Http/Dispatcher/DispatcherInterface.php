<?php

namespace App\Http\Dispatcher;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

interface DispatcherInterface
{
    /**
     * @param  string                                     $url
     * @param  \Symfony\Component\HttpFoundation\Request  $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function dispatch(string $url, Request $request): Response;
}
