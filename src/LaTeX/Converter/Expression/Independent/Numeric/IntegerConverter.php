<?php

namespace Mathcore\LaTeX\Converter\Expression\Independent\Numeric;

use Mathcore\Expression\Expression;
use Mathcore\Expression\Independent\Numeric\Integer;
use Mathcore\LaTeX\Converter\LaTeXConverter;
use Mathcore\LaTeX\Value\LaTeXValue;

class IntegerConverter extends LaTeXConverter
{
    public function convert(Expression $expression): LaTeXValue
    {
        if ($expression instanceof Integer) {
            return new LaTeXValue($expression->getValue());
        } else {
            throw new \InvalidArgumentException();
        }
    }
}