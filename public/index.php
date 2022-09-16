<?php

declare(strict_types=1);

use App\HelloWorld;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$container = require __DIR__ . '/../bootstrap/container.php';

echo $container->get(HelloWorld::class)->hello();
