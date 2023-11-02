<?php

namespace Mathcore\Expression\Composite;

use Mathcore\Container\ExpressionContainer;
use Mathcore\Expression\Expression;

class Monomial extends Expression
{
    private ExpressionContainer $container;

    public function __construct()
    {
        $this->container = new ExpressionContainer();
    }

    public function addFactor(Expression $factor): self
    {
        $this->container->addItem($factor);
        return $this;
    }
}