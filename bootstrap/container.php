<?php

declare(strict_types=1);

$builder = new \DI\ContainerBuilder();

$providers = require __DIR__ . '/services.php';

foreach ($providers as $provider) {
    (new $provider())->__invoke($builder);
}

return $builder->build();
