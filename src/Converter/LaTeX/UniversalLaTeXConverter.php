<?php

namespace Mathcore\Converter\LaTeX;

use Mathcore\Converter\Interface\ConverterInterface;
use Mathcore\Expression\Expression;
use Mathcore\Factory\Converter\LaTeXConverterFactory;
use Mathcore\LaTeX\Value\LaTeXValue;

/**
 * This class can convert any expression into it's LaTeX equivalent.
 * It doesn't need any dependencies and is recommended to be used in your project instead of specific converters.
 */
class UniversalLaTeXConverter implements ConverterInterface
{
    public function convert(Expression $expression): LaTeXValue
    {
        $converter = LaTeXConverterFactory::get($expression::class);
        return $converter->convert($expression);
    }
}