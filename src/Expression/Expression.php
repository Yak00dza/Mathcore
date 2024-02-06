<?php

namespace Mathcore\Expression;

use Mathcore\Container\Interface\ContainableInterface;
use Mathcore\Expression\Independent\Numeric\Integer;
use Mathcore\Expression\VTO\ExponentiationRule;

class Expression implements ContainableInterface
{
    private ?Expression $power;

    protected static string $exponentiationRule = ExponentiationRule::STANDARD;

    public function __construct(?Expression $power)
    {
        $this->power = $power;
    }

    public function squared(): Expression
    {
        $copy = clone $this;
        $copy->setPower(new Integer(2));
        return $copy;
    }

    public function getPower(): ?Expression
    {
        return $this->power;
    }

    public function setPower(Expression $power): self
    {
        $this->power = $power;
        return $this;
    }

    public function hasPower(): bool
    {
        return null !== $this->power;
    }

    public static function getExponentiationRule(): string
    {
        return static::$exponentiationRule;
    }
}