<?php

declare(strict_types=1);

namespace App;

class HelloWorld
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @param  string  $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function hello(): string
    {
        return 'Hello ' . $this->name;
    }
}
