<?php

namespace App\Providers;

use App\Http\Controller\Index\IndexAction;
use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;
use Twig\Environment;

class ControllerProvider
{
    public function __invoke(ContainerBuilder $builder): void
    {
        $builder->addDefinitions([
            IndexAction::class => fn(ContainerInterface $container
            ) => new IndexAction($container->get(Environment::class)),
        ]);
    }
}
