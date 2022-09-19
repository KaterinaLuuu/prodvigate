<?php

declare(strict_types=1);

namespace App\Services\Middleware;

interface StackInterface
{
    public function next(): MiddlewareInterface;
}
