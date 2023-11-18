<?php

namespace Mathcore\Container\Sorter;

use Mathcore\Container\AbstractContainer;
use Mathcore\Container\ExpressionContainer;
use Mathcore\Container\Sorter\Comparison\AbstractComparison;
use Mathcore\Factory\Interface\FactorableInterface;
use Mathcore\Validator\TypeValidator;

abstract class ContainerSorter implements FactorableInterface
{
    private AbstractComparison $comparison;

    private TypeValidator $typeValidator;

    protected static string $containerType = AbstractContainer::class;

    public function __construct(
        AbstractComparison $comparison,
        TypeValidator $typeValidator
    ) {
        $this->comparison = $comparison;
        $this->typeValidator = $typeValidator;
    }

    public function sort(AbstractContainer $container): ExpressionContainer
    {
        $this->typeValidator->validate($container);

        $array = $container->toArray();
        usort($array, [$this->comparison, 'compare']);

        $container = static::getContainerType();
        return new $container($array);
    }

    public static function getContainerType(): string
    {
        return static::$containerType;
    }
}