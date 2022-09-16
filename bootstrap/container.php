<?php

declare(strict_types=1);

$builder = new \DI\ContainerBuilder();
$builder->useAutowiring(false);
$builder->useAnnotations(false);

$providers = require __DIR__ . '/services.php';

foreach ($providers as $provider) {
    $prov = new $provider();
    $prov($builder);
}

$container = $builder->build();

return $container;
