<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Service\Http\Middleware\MiddlewareInterface;
use App\Service\Http\Middleware\StackInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

final class HelloMiddleware implements MiddlewareInterface
{
    /** @var \Twig\Environment */
    private Environment $environment;

    /**
     * @param  \Twig\Environment  $environment
     */
    public function __construct(Environment $environment)
    {
        $this->environment = $environment;
    }

    public function process(Request $request, StackInterface $stack): Response
    {
        return new Response($this->environment->render('index.html.twig'));
    }
}
