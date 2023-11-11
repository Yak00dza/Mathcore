<?php

namespace Mathcore\Container\Sorter\Comparison\Expression;

use Mathcore\Container\Interface\ContainableInterface;
use Mathcore\Container\Sorter\Comparison\AbstractComparison;
use Mathcore\Expression\Composite\Monomial;
use Mathcore\Expression\Composite\Polynomial;
use Mathcore\Expression\Independent\Func\Func;
use Mathcore\Expression\Independent\Func\TrigonometricFunction;
use Mathcore\Expression\Independent\Numeric\Decimal;
use Mathcore\Expression\Independent\Numeric\Integer;
use Mathcore\Expression\Independent\Variable;

class MonomialFactorsComparison extends AbstractComparison
{
    private const ORDER = [
        Decimal::class => 0,
        Integer::class => 0,
        Variable::class => 1,
        Monomial::class => 2,
        Polynomial::class => 3,
        Func::class => 4,
        TrigonometricFunction::class => 5,
    ];

    public function compare(ContainableInterface $a, ContainableInterface $b): int
    {
        $this->typeValidator->validate($a);
        $this->typeValidator->validate($b);

        return self::ORDER[$a::class] - self::ORDER[$b::class];
    }
}