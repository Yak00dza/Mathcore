<?php

namespace Mathcore\Expression\Composite;

use Mathcore\Container\ExpressionContainer;
use Mathcore\Expression\Expression;

class Monomial extends Expression
{
    private ExpressionContainer $container;

    public function __construct(?ExpressionContainer $container = new ExpressionContainer())
    {
        $this->container = $container;
    }

    public function getFactors(): ExpressionContainer
    {
        return $this->container;
    }

    public function addFactor(Expression $factor): self
    {
        $this->container->addItem($factor);
        return $this;
    }
}