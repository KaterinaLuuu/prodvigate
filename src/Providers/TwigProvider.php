<?php

namespace App\Providers;

use DI\ContainerBuilder;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

final class TwigProvider
{
    public function __invoke(ContainerBuilder $builder): void
    {
        $builder->addDefinitions([
            Environment::class => fn() => new Environment(new FilesystemLoader(__DIR__ . '/../../resources/templates')),
        ]);
    }
}
