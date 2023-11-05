<?php

namespace Mathcore\Converter\LaTeX\Expression\Independent\Numeric;

use Mathcore\Converter\LaTeX\LaTeXConverter;
use Mathcore\Expression\Expression;
use Mathcore\Expression\Independent\Numeric\Decimal;
use Mathcore\LaTeX\Value\LaTeXValue;

class DecimalConverter extends LaTeXConverter
{
    public function convert(Expression $expression): LaTeXValue
    {
        $this->typeValidator->validate($expression);

        /**
         * @var Decimal $expression
         */
        return new LaTeXValue($expression->getValue());
    }
}