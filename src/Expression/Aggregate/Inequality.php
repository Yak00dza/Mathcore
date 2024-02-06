<?php

namespace Mathcore\Expression\Aggregate;

use Mathcore\Expression\Aggreagate\Value\InequalitySymbol;
use Mathcore\Expression\Expression;

class Inequality extends AggregateExpression
{
    private InequalitySymbol $symbol;

    public function __construct(
        Expression $left,
        Expression $right,
        InequalitySymbol $symbol
    ) {
        parent::__construct($left, $right);
        $this->symbol = $symbol;
    }
}