<?php

declare(strict_types=1);

use App\Http\Middleware\HelloMiddleware;
use App\Service\Http\Kernel;
use Symfony\Component\HttpFoundation\Request;

$container = require __DIR__ . '/../bootstrap/container.php';

$middleware = [
    HelloMiddleware::class,
];
$request = Request::createFromGlobals();
$met = $request->getMethod();
$pa = $request->getQueryString();
echo '<pre>';
print_r($request);
echo '</pre>';
//echo '<pre>';
//print_r($met);
//echo '</pre>';
echo '<pre>';
print_r($pa);
echo '</pre>';

$response = (new Kernel($middleware, $container))->process(Request::createFromGlobals());

$response->send();
