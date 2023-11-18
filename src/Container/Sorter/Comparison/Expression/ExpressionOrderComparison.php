<?php

namespace Mathcore\Container\Sorter\Comparison\Expression;

use Mathcore\Container\Interface\ContainableInterface;
use Mathcore\Container\Sorter\Comparison\AbstractComparison;
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

abstract class ExpressionOrderComparison extends AbstractComparison
{
    protected static string $priority = '';

 protected const ORDER = [
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
     /**
      * @var Expression $a
      * @var Expression $b
      */
     $this->typeValidator->validate($a);
     $this->typeValidator->validate($b);

     if (static::$priority === ComparingPriority::BASE) {
         return $this->compareByBase($a, $b);
     }

     return $this->compareByPower($a, $b);
 }

    private function compareByBase(Expression $a, Expression $b, bool $comparedBefore = false): int
    {
        $difference = self::ORDER[$a::class] - self::ORDER[$b::class];
        if (0 !== $difference) {
            return $difference;
        }

        if ($comparedBefore) {
            return 0;
        }
        return $this->compareByPower($a, $b, true);
    }

    private function compareByPower(Expression $a, Expression $b, bool $comparedBefore = false): int
    {
        if (!($a->hasPower() || $b->hasPower())) {
            if ($comparedBefore) {
                return 0;
            }
            return $this->compareByBase($a, $b, true);
        }
        if ($a->hasPower() && !$b->hasPower()) {
            return -1;
        }

        if (!$a->hasPower() && $b->hasPower()) {
            return 1;
        }

        $powerA = $a->getPower();
        $powerB = $b->getPower();

        if ($powerA instanceof NumericInterface && $powerB instanceof NumericInterface) {
            return $powerB->getValue() - $powerA->getValue();
        }

        return $this->compareByPower($powerA, $powerB);
    }
}