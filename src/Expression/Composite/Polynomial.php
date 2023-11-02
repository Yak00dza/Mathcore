<?php

namespace Mathcore\Expression\Composite;

use Mathcore\Container\ExpressionContainer;
use Mathcore\Expression\Expression;

class Polynomial extends Expression
{
    private ExpressionContainer $container;

    public function __construct()
    {
        $this->container = new ExpressionContainer();
    }

    public function addTerm(Expression $term): self
    {
        $this->container->addItem($term);
        return $this;
    }
}