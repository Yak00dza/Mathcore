<?php

namespace Mathcore\LaTeX\Converter\Expression\Independent;

use Mathcore\Expression\Expression;
use Mathcore\Expression\Independent\Variable;
use Mathcore\LaTeX\Converter\LaTeXConverter;
use Mathcore\LaTeX\Value\LaTeXValue;

class VariableConverter extends LaTeXConverter
{
    public function convert(Expression $expression): LaTeXValue
    {
        if ($expression instanceof Variable) {
            return new LaTeXValue($expression->getName());
        } else {
            throw new \InvalidArgumentException();
        }
    }
}