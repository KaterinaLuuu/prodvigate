<?php

declare(strict_types=1);

namespace App\Providers;

use App\HelloWorld;
use DI\ContainerBuilder;

class HelloWorldServiceProvider
{
    /**
     * @param ContainerBuilder $builder
     * @return ContainerBuilder
     */
    public function __invoke(ContainerBuilder $builder): ContainerBuilder
    {
        return $builder->addDefinitions([
            'HelloWorld' => function () {
                return new HelloWorld('Kate');
            }
        ]);
    }
}
