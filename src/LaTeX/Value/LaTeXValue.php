<?php

namespace Mathcore\LaTeX\Value;

use Mathcore\Container\Interface\ContainableInterface;

class LaTeXValue implements ContainableInterface
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->value;
    }
}