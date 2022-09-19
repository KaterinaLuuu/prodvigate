<?php

declare(strict_types=1);

use App\Services\Http\Kernel;
use Symfony\Component\HttpFoundation\Request;

$container = require __DIR__ . '/../bootstrap/container.php';

$requestHandler = (new Kernel())->process(Request::createFromGlobals());
$requestHandler->send();
