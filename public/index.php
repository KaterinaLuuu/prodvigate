<?php

declare(strict_types=1);

use App\Http\Controller\Index\IndexAction;
use App\Http\Middleware\HelloMiddleware;
use App\Service\Http\Kernel;
use Symfony\Component\HttpFoundation\Request;
use App\Service\Http\Middleware\Dispatcher;

$container = require __DIR__ . '/../bootstrap/container.php';

$middleware = [
    Dispatcher::class,
    HelloMiddleware::class,
];

$response = (new Kernel($middleware, $container))->process(Request::createFromGlobals());

$response->send();
