<?php

namespace Mathcore\Expression\Independent\Numeric\Interface;

interface NumericInterface
{
    public function isNegative(): bool;

    public function getValue(): int|float;
}