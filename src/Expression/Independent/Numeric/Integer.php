<?php

namespace Mathcore\Expression\Independent\Numeric;

use Mathcore\Expression\Expression;
use Mathcore\Expression\Independent\Numeric\Inteface\NumericInterface;

class Integer extends Expression implements NumericInterface
{
    private int $value;

    public function __construct(int $value, Expression $power = null)
    {
        $this->value = $value;
        parent::__construct($power);
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function isNegative() : bool
    {
        return $this->value < 0;
    }
}