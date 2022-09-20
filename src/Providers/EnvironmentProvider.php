<?php

namespace App\Providers;

use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class EnvironmentProvider
{
    public function __invoke(ContainerBuilder $builder): void
    {
        $builder->addDefinitions([
            Environment::class => fn (ContainerInterface $container)
            => new Environment($container->get(FilesystemLoader::class)),
        ]);
    }
}
