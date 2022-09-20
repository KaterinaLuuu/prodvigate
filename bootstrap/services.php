<?php

declare(strict_types=1);

use App\Providers\HelloWorldProvider;
use App\Providers\HelloMiddlewareProvider;
use App\Providers\FilesystemLoaderProvider;
use App\Providers\EnvironmentProvider;

return [
    HelloWorldProvider::class,
    HelloMiddlewareProvider::class,
    FilesystemLoaderProvider::class,
    EnvironmentProvider::class,
];
