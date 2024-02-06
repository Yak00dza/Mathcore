<?php

namespace Mathcore\Converter\LaTeX\Expression\Aggregate;

use Mathcore\Converter\LaTeX\SpecificLaTeXConverter;
use Mathcore\Expression\Aggregate\Equation;
use Mathcore\Expression\Expression;
use Mathcore\LaTeX\Value\LaTeXValue;

class EquationConverter extends SpecificLaTeXConverter
{
    public function convert(Expression $expression): LaTeXValue
    {
        $this->typeValidator->validate($expression);

        /** @var Equation $expression */
        $left = $this->internalConverter->convert($expression->getLeft());
        $right = $this->internalConverter->convert($expression->getRight());

        return new LaTeXValue(sprintf(
            '%s = %s',
            $left,
            $right
        ));
    }
}