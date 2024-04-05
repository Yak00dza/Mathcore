<?php

namespace Mathcore\Container\Sorter\Comparison\Expression;

use Mathcore\Container\Interface\ContainableInterface;
use Mathcore\Container\Sorter\Comparison\AbstractComparison;
use Mathcore\Container\Sorter\Comparison\Expression\VTO\ComparingPriority;
use Mathcore\Expression\Expression;
use Mathcore\Expression\Independent\Numeric\Interface\NumericInterface;

abstract class ExpressionOrderComparison extends AbstractComparison
{
    protected static string $priority = '';

    protected static array $order = [];

    public function compare(ContainableInterface $a, ContainableInterface $b): int
    {
       return 0;
    }

    public function compareByBase(Expression $a, Expression $b, bool $comparedBefore = false): int
    {
        return 0;
    }

    public function compareByPower(Expression $a, Expression $b, bool $comparedBefore = false): int
    {
        return 0;
    }

}