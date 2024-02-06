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

    protected static array $baseOrder = [];

    public function compare(ContainableInterface $a, ContainableInterface $b): int
    {
        /**
         * @var Expression $a
        * @var Expression $b
        */
        $this->typeValidator->validate($a);
        $this->typeValidator->validate($b);

        //TODO: Reimplement
        return 0;
    }

}