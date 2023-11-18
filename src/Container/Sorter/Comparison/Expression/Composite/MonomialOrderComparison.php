<?php

namespace Mathcore\Container\Sorter\Comparison\Expression\Composite;

use Mathcore\Container\Interface\ContainableInterface;
use Mathcore\Container\Sorter\Comparison\AbstractComparison;
use Mathcore\Container\Sorter\Comparison\Expression\ExpressionOrderComparison;
use Mathcore\Container\Sorter\Comparison\Expression\VTO\ComparingPriority;
use Mathcore\Expression\Composite\Monomial;
use Mathcore\Expression\Composite\Polynomial;
use Mathcore\Expression\Expression;
use Mathcore\Expression\Independent\Func\Func;
use Mathcore\Expression\Independent\Func\TrigonometricFunction;
use Mathcore\Expression\Independent\Numeric\Decimal;
use Mathcore\Expression\Independent\Numeric\Integer;
use Mathcore\Expression\Independent\Numeric\Interface\NumericInterface;
use Mathcore\Expression\Independent\Variable;

class MonomialOrderComparison extends ExpressionOrderComparison
{
    protected static string $priority = ComparingPriority::BASE;
}