<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

$app = require __DIR__ . '/../bootstrap/container.php';

echo $app->get(HelloWorld::class)->hello();
