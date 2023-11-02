<?php
use Mathcore\Expression\Expression;
use Mathcore\Expression\Independent\Func\TrigonometricFunction;
use Mathcore\LaTeX\Converter\LaTeXConverter;
use Mathcore\LaTeX\Value\LaTeXValue;

class TrigonometricFunctionConverter extends LaTeXConverter
{
    public function convert(Expression $expression): LaTeXValue
    {
        if ($expression instanceof TrigonometricFunction) {
            //TODO: remake convertion
            $string = sprintf('%s(%s)', $expression->getName(), $expression->getArgument());
            return new LaTeXValue($string);
        } else {
            throw new \InvalidArgumentException();
        }
    }
}