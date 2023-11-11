<?php

namespace Mathcore\Container;

use Mathcore\Expression\Expression;

class ExpressionContainer extends AbstractContainer
{
    protected static string $containedType = Expression::class;
}