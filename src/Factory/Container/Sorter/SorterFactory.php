<?php

namespace Mathcore\Factory\Container\Sorter;

use Mathcore\Container\AbstractContainer;
use Mathcore\Container\Sorter\Comparison\Interface\ComparisonInterface;
use Mathcore\Container\Sorter\ContainerSorter;
use Mathcore\Container\Sorter\Interface\SorterInterface;
use Mathcore\Factory\Interface\FactorableInterface;
use Mathcore\Factory\Interface\FactoryInterface;
use Mathcore\Validator\TypeValidator;

class SorterFactory implements FactoryInterface
{
    public static function get(string $class): FactorableInterface
    {
       $comparison = str_replace('Sorter', 'Comparison', $class);
       $comparison = str_replace('\\Comparison', '\\Sorter\\Comparison', $comparison);

       $containerType = $class::getContainerType();
       $type = $containerType::getContainedType();

       $validator = new TypeValidator($type);
       return new $class(
           new $comparison(new TypeValidator($type)),
           new TypeValidator($containerType)
       );
    }
}