<?php

declare(strict_types=1);

use App\HelloWorld;

$container = require __DIR__ . '/../bootstrap/container.php';

echo $container->get(HelloWorld::class)->hello();
