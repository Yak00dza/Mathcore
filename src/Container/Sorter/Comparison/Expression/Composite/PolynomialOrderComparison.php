<?php

namespace Mathcore\Container\Sorter\Comparison\Expression\Composite;

use Mathcore\Container\Sorter\Comparison\Expression\ExpressionOrderComparison;
use Mathcore\Container\Sorter\Comparison\Expression\VTO\ComparingPriority;

class PolynomialOrderComparison extends ExpressionOrderComparison
{
    protected static string $priority = ComparingPriority::POWER;
}