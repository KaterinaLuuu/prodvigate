<?php

namespace App\Providers;

use App\Http\Dispatcher\Dispatcher;
use App\Http\Dispatcher\DispatcherImpl;
use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;

class DispatcherProvider
{
    public function __invoke(ContainerBuilder $builder): void
    {
        $builder->addDefinitions([
            Dispatcher::class => fn(ContainerInterface $container) => new DispatcherImpl($container),
        ]);
    }
}
