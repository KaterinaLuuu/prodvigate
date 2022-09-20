<?php

declare(strict_types=1);

use App\Http\Middleware\HelloMiddleware;
use App\Service\Http\Kernel;
use Symfony\Component\HttpFoundation\Request;

$container = require __DIR__ . '/../bootstrap/container.php';

$middleware = [
    HelloMiddleware::class,
];

$response = (new Kernel($middleware, $container))->process(Request::createFromGlobals());

$response->send();
