<?php

namespace Mathcore\Container;

use Mathcore\Expression\Expression;

class ExpressionContainer extends AbstractContainer
{
    protected string $CONTAINED_TYPE = Expression::class;
}