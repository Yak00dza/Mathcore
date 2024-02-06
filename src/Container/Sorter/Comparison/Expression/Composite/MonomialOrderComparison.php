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

class MonomialOrderComparison extends ExpressionOrderComparison
{
    protected static string $priority = ComparingPriority::BASE;

    protected static array $order = [
    Decimal::class => 0,
    Integer::class => 0,
    Variable::class => 1,
    Monomial::class => 2,
    Polynomial::class => 3,
    Func::class => 4,
    TrigonometricFunction::class => 5
    ];
}