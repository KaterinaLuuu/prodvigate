<?php

declare(strict_types=1);

use App\Http\Middleware\HelloMiddleware;
use App\Services\Http\Kernel;
use Symfony\Component\HttpFoundation\Request;

$container = require __DIR__ . '/../bootstrap/container.php';

$middleware = [
    HelloMiddleware::class,
];

$requestHandler = (new Kernel($middleware))->process(Request::createFromGlobals());

$requestHandler->send();
