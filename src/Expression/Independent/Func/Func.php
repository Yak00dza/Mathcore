<?php

namespace Mathcore\Expression\Independent\Func;

use Mathcore\Expression\Expression;

class Func extends Expression //Word 'Function" is reserved
{
    private string $name;

    private Expression $argument;

    public function __construct(string $name, Expression $argument)
    {
        $this->name = $name;
        $this->argument = $argument;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getArgument(): Expression
    {
        return $this->argument;
    }
}