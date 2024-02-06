<?php

namespace Mathcore\Value\String;

abstract class StringValue
{
    private string $value;

    public function __construct(string $value) {
        $this->value = $value;
    }

    public function __toString(): string {
        return $this->value;
    }

    public function getValue(): string {
        return $this->value;
    }
}