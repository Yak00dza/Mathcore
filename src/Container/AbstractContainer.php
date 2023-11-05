<?php

namespace Mathcore\Container;

use Mathcore\Container\Interface\ContainableInterface;
use Mathcore\Factory\Interface\FactorableInterface;
use Mathcore\Validator\ArrayValidator;
use Mathcore\Validator\TypeValidator;

abstract class AbstractContainer implements FactorableInterface
{
    protected string $CONTAINED_TYPE;
    private array $items;

    private TypeValidator $typeValidator;

    private ArrayValidator $arrayValidator;
    public function __construct()
    {
        $this->typeValidator = new TypeValidator($this->CONTAINED_TYPE);
        $this->arrayValidator = new ArrayValidator($this->typeValidator);

        $this->items = array();
    }

    public function addItem(ContainableInterface $item): self
    {
        $this->typeValidator->validate($item);
        $this->items[] = $item;

        return $this;
    }

    public function addArray(array $items): self
    {
        $this->arrayValidator->validate($items);
        $this->items += $items;

        return $this;
    }
    public function toArray(): array
    {
        return $this->items;
    }

    public function getContainedType(): string
    {
        return $this->CONTAINED_TYPE;
    }
}