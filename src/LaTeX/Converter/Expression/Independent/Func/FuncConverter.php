<?php

namespace Mathcore\LaTeX\Converter\Expression\Independent\Func;

use Mathcore\Expression\Expression;
use Mathcore\Expression\Independent\Func\Func;
use Mathcore\LaTeX\Converter\LaTeXConverter;
use Mathcore\LaTeX\Value\LaTeXValue;

class FuncConverter extends LaTeXConverter
{
    public function convert(Expression $expression): LaTeXValue
    {
        if ($expression instanceof Func) {
            //TODO: remake convertion
            $string = sprintf('%s(%s)', $expression->getName(), $expression->getArgument());
            return new LaTeXValue($string);
        } else {
            throw new \InvalidArgumentException();
        }
    }
}