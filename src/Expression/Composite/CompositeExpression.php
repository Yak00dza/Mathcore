<?php

namespace Mathcore\Expression\Composite;

use Mathcore\Container\ExpressionContainer;
use Mathcore\Expression\Expression;
use Mathcore\Expression\VTO\ExponentiationRule;

abstract class CompositeExpression extends Expression
{
    protected ExpressionContainer $container;

    protected static string $exponentiationRule = ExponentiationRule::BRACKETS;

    public function __construct(
        ExpressionContainer $container = new ExpressionContainer(),
        Expression $power = null
    ) {
        $this->container = $container;

        parent::__construct($power);
    }

    public function getItems(): ExpressionContainer
    {
        return $this->container;
    }

    public function countItems(): int
    {
        return $this->container->getLength();
    }

}