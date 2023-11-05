<?php

namespace Mathcore\Converter\LaTeX\Expression\Independent;

use Mathcore\Converter\LaTeX\LaTeXConverter;
use Mathcore\Expression\Expression;
use Mathcore\Expression\Independent\Variable;
use Mathcore\LaTeX\Value\LaTeXValue;

class VariableConverter extends LaTeXConverter
{
    public function convert(Expression $expression): LaTeXValue
    {
        $this->typeValidator->validate($expression);

        /**
         * @var Variable $expression
         */
        return new LaTeXValue($expression->getName());
    }
}