<?php

namespace Mathcore\Container\Sorter\Expression;

use Mathcore\Container\ExpressionContainer;
use Mathcore\Container\Sorter\ContainerSorter;

abstract class ExpressionOrderSorter extends ContainerSorter
{
    protected static string $containerType = ExpressionContainer::class;
}