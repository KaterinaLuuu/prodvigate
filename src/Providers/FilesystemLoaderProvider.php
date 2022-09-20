<?php

namespace App\Providers;

use DI\ContainerBuilder;
use Twig\Loader\FilesystemLoader;

class FilesystemLoaderProvider
{
    public function __invoke(ContainerBuilder $builder): void
    {
        $builder->addDefinitions([
            FilesystemLoader::class => fn () => new FilesystemLoader(__DIR__ . '/../../resources/templates'),
        ]);
    }
}
