<?php

namespace Mathcore\Expression\Composite;

use Mathcore\Container\ExpressionContainer;
use Mathcore\Expression\Expression;

class Monomial extends CompositeExpression
{
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