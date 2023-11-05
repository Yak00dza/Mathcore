<?php

namespace Mathcore\Expression\Independent\Func;

use Mathcore\Container\ExpressionContainer;
use Mathcore\Expression\Expression;

class Func extends Expression //Word 'Function' is reserved
{
    private string $name;

    private ExpressionContainer $arguments;

    public function __construct(string $name, Expression ...$arguments)
    {
        $this->name = $name;

        $this->arguments = (new ExpressionContainer())->addArray($arguments);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getArguments(): ExpressionContainer
    {
        return $this->arguments;
    }
}