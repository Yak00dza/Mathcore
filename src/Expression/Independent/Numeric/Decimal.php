<?php

namespace Mathcore\Expression\Independent\Numeric;

use Mathcore\Expression\Expression;
use Mathcore\Expression\Independent\Numeric\Interface\NumericInterface;

class Decimal extends Expression implements NumericInterface
{
    private float $value;

    public function __construct(float $value, Expression $power = null)
    {
        $this->value = $value;
        parent::__construct($power);
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function isNegative() : bool
    {
        return $this->value < 0;
    }
}