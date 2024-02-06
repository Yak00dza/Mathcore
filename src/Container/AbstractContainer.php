<?php

namespace Mathcore\Container;

use Mathcore\Container\Interface\ContainableInterface;
use Mathcore\Factory\Interface\FactorableInterface;
use Mathcore\Validator\ArrayValidator;
use Mathcore\Validator\TypeValidator;

abstract class AbstractContainer implements FactorableInterface
{
    protected static string $containedType = ContainableInterface::class;
    
    private array $items;

    private TypeValidator $typeValidator;

    private ArrayValidator $arrayValidator;
    
    public function __construct(?array $items = array())
    {
        $this->typeValidator = new TypeValidator(self::$containedType);
        $this->arrayValidator = new ArrayValidator($this->typeValidator);

        null !== $items && $this->arrayValidator->validate($items);
        $this->items = $items;
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

    public static function getContainedType(): string
    {
        return static::$containedType;
    }

    public function getLength(): int
    {
        return sizeof($this->items);
    }
}
