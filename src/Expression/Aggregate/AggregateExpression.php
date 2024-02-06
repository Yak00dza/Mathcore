<?php

namespace Mathcore\Expression\Aggregate;

use Mathcore\Expression\Expression;

class AggregateExpression extends Expression
{
    private Expression $left;
    
    private Expression $right;

    public function __construct(
        Expression $left,
        Expression $right
    ) {
        $this->left = $left;
        $this->right = $right;
    }

    public function getLeft(): Expression {
        return $this->left;
    }

    public function getRight(): Expression {
        return $this->right;
    }
}