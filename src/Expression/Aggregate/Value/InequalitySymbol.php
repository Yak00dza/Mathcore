<?php

namespace Mathcore\Expression\Aggreagate\Value;
use Mathcore\Value\String\StringValue;

class InequalitySymbol extends StringValue
{
    const EQUALS = '=';
    const GREATER = '>';
    const LESS = '<';
    const GREATER_EQUAL = '\\geq';
    const LESS_EQUAL = '\\leq';

    const VALUES = [
        self::EQUALS,
        self::GREATER,
        self::LESS,
        self::GREATER_EQUAL,
        self::LESS_EQUAL,
    ];

    private string $value;

    public function __construct(string $value) {
        if (in_array($value, self::VALUES)) {
            $this->value = $value;
        }
        else {
            throw new \InvalidArgumentException;
        }
    }

    public function __toString() {
        return $this->value;
    }
}