<?php

namespace Mathcore\Container;

use MAthcore\Container\Exception\InvalidContainableTypeException;
use Mathcore\Container\Interface\ContainableInterface;
use Mathcore\Container\Interface\ContainerInteface;
use Mathcore\Expression\Expression;

class ExpressionContainer implements ContainerInteface
{
    private array $expressions = [];

    public function addItem(ContainableInterface $item): void
    {
        if ($item instanceof Expression) {
            $this->expressions[] = $item;
        } else {
            throw new InvalidContainableTypeException(Expression::class, $item::class);
        }
    }

    public function toArray(): array
    {
        return $this->expressions;
    }
}