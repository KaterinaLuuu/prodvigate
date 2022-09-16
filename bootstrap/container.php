<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

$builder = new \DI\ContainerBuilder();

$providers = require __DIR__ . '/services.php';

foreach ($providers as $provider) {
    (new $provider())($builder);
}

return $builder->build();
