<?php

namespace Mathcore\Converter\LaTeX\Expression\Independent\Numeric;

use Mathcore\Converter\LaTeX\SpecificLaTeXConverter;
use Mathcore\Expression\Expression;
use Mathcore\Expression\Independent\Numeric\Integer;
use Mathcore\LaTeX\Value\LaTeXValue;

class IntegerConverter extends SpecificLaTeXConverter
{
    public function convert(Expression $expression): LaTeXValue
    {
        $this->typeValidator->validate($expression);

        /**
         * @var Integer $expression
         */
        return new LaTeXValue($expression->getValue());
    }
}