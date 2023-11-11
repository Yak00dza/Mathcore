<?php

namespace Mathcore\Container\Sorter\Expression;

use Mathcore\Container\ExpressionContainer;
use Mathcore\Container\Sorter\ContainerSorter;

class MonomialFactorsSorter extends ContainerSorter
{
    protected static string $containerType = ExpressionContainer::class;
}