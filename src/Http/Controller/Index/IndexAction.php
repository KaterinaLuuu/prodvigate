<?php

declare(strict_types=1);

namespace App\Http\Controller\Index;

use Twig\Environment;
use Twig\Error\Error;

final class IndexAction
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
     * @return string
     * @throws Error
     */
    public function __invoke()
    {
        return $this->environment->render('index.html.twig');
    }
}
