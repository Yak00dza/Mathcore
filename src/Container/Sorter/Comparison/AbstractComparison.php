<?php

namespace Mathcore\Container\Sorter\Comparison;

use Mathcore\Container\Interface\ContainableInterface;
use Mathcore\Validator\TypeValidator;

abstract class AbstractComparison
{
    protected TypeValidator $typeValidator;

    public function __construct(TypeValidator $typeValidator)
    {
        $this->typeValidator = $typeValidator;
    }

    /**
     * Returns an integer less than, equal to or greater than zero if $a is considered
     * less than, equal to or greater than $b respectively.
     * Is meant to be used in build-in usort() method.
     *
     * @param ContainableInterface $a
     * @param ContainableInterface $b
     * @return int
     */
    public abstract function compare (ContainableInterface $a, ContainableInterface $b): int;
}