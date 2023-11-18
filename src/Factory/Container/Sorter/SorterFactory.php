<?php

namespace Mathcore\Factory\Container\Sorter;

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
           new $comparison($validator),
           new TypeValidator($containerType)
       );
    }
}