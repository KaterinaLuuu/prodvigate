<?php

namespace App\Providers;

use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TwigProvider
{
    public function __invoke(ContainerBuilder $builder): void
    {
        $builder->addDefinitions([
            FilesystemLoader::class => fn () => new FilesystemLoader(__DIR__ . '/../../resources/templates'),
            Environment::class => fn (ContainerInterface $container)
            => new Environment($container->get(FilesystemLoader::class)),
        ]);
    }
}
