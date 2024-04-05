<?php

namespace Mathcore\Container\Sorter\Comparison\Expression\Composite;

use Mathcore\Container\Sorter\Comparison\Expression\ExpressionOrderComparison;
use Mathcore\Container\Sorter\Comparison\Expression\VTO\ComparingPriority;
use Mathcore\Expression\Composite\Monomial;
use Mathcore\Expression\Composite\Polynomial;
use Mathcore\Expression\Independent\Func\Func;
use Mathcore\Expression\Independent\Func\TrigonometricFunction;
use Mathcore\Expression\Independent\Numeric\Decimal;
use Mathcore\Expression\Independent\Numeric\Integer;
use Mathcore\Expression\Independent\Variable;

class PolynomialOrderComparison extends ExpressionOrderComparison
{
    protected static string $priority = ComparingPriority::POWER;

    protected static array $order = [
        Decimal::class => 5,
        Integer::class => 5,
        Variable::class => 4,
        Monomial::class => 3,
        Polynomial::class => 2,
        Func::class => 0,
        TrigonometricFunction::class => 1,
        ];
}