<?php

declare(strict_types=1);

namespace App\Http\Controller\Index;

use Symfony\Component\HttpFoundation\Request;
use Twig\Environment;

class IndexAction
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

    /**
     * @param  \Symfony\Component\HttpFoundation\Request  $requers
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function __invoke(Request $requers)
    {
        return $this->environment->render('index.html.twig');
    }
}
