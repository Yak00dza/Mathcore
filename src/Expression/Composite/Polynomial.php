<?php

namespace Mathcore\Expression\Composite;

use Mathcore\Container\ExpressionContainer;
use Mathcore\Expression\Expression;

class Polynomial extends CompositeExpression
{
    public function getTerms(): ExpressionContainer
    {
        return $this->container;
    }

    public function addTerm(Expression $factor): self
    {
        $this->container->addItem($factor);
        return $this;
    }
}