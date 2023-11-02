<?php

namespace Mathcore\LaTeX\Converter\Expression\Independent\Numeric;

use Mathcore\Expression\Expression;
use Mathcore\Expression\Independent\Numeric\Decimal;
use Mathcore\LaTeX\Converter\LaTeXConverter;
use Mathcore\LaTeX\Value\LaTeXValue;

class DecimalConverter extends LaTeXConverter
{
    public function convert(Expression $expression): LaTeXValue
    {
        if ($expression instanceof Decimal) {
            return new LaTeXValue($expression->getValue());
        } else {
            throw new \InvalidArgumentException();
        }
    }
}