<?php

namespace Mathcore\Expression\Independent\Func;

use Mathcore\Container\ExpressionContainer;
use Mathcore\Expression\Expression;
use Mathcore\Expression\VTO\ExponentiationRule;

class Func extends Expression //Word 'Function' is reserved
{
    private string $name;

    protected static string $exponentiationRule = ExponentiationRule::FUNCTION;

    private ExpressionContainer $arguments;

    public function __construct(string $name, ?Expression $power, Expression ...$arguments)
    {
        $this->name = $name;

        $this->arguments = (new ExpressionContainer())->addArray($arguments);
        parent::__construct($power);
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