<?php

namespace Mathcore\Expression;

use Mathcore\Container\Interface\ContainableInterface;
use Mathcore\Expression\VTO\ExponentiationRule;

class Expression implements ContainableInterface
{
    private ?Expression $power;

    protected static string $exponentiationRule = ExponentiationRule::STANDARD;

    public function __construct(?Expression $power)
    {
        $this->power = $power;
    }

    public function getPower(): ?Expression
    {
        return $this->power;
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