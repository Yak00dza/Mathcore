<?php

namespace Mathcore\Factory\Container\Sorter;

use Mathcore\Factory\Interface\FactorableInterface;
use Mathcore\Factory\Interface\FactoryInterface;

class ExpressionOrderSorterFactory implements FactoryInterface
{

    public static function get(string $class): FactorableInterface
    {
        $sorter = str_replace('\\Expression', '\\Container\\Sorter\\Expression', $class).'OrderSorter';
        return SorterFactory::get($sorter);
    }
}