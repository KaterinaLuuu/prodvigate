<?php

declare(strict_types=1);

namespace App\Providers;

use App\HelloWorld;
use DI\ContainerBuilder;

class HelloWorldProvider
{
    public function __invoke(ContainerBuilder $builder): void
    {
        $builder->addDefinitions([
            HelloWorld::class => fn() => new HelloWorld('Kate'),
        ]);
    }
}
