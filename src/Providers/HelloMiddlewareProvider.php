<?php

namespace App\Providers;

use App\Http\Middleware\HelloMiddleware;
use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;
use Twig\Environment;

class HelloMiddlewareProvider
{
    public function __invoke(ContainerBuilder $builder): void
    {
        $builder->addDefinitions([
            HelloMiddleware::class => function (ContainerInterface $container) {
                return new HelloMiddleware($container->get(Environment::class));
            },
        ]);
    }
}
