<?php

namespace Mathcore\Container;

use MAthcore\Container\Exception\InvalidContainableTypeException;
use Mathcore\Container\Inteface\ContainableInteface;
use Mathcore\Container\Inteface\ContainerInteface;
use Mathcore\Expression\Expression;

class ExpressionContainer implements ContainerInteface
{
    private array $expressions = [];

    public function addItem(ContainableInteface $item): void
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