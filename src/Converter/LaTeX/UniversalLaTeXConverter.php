<?php

namespace Mathcore\Converter\LaTeX;

use Mathcore\Converter\Interface\ConverterInterface;
use Mathcore\Expression\Expression;
use Mathcore\Factory\Converter\LaTeX\LaTeXConverterFactory;
use Mathcore\Factory\Converter\LaTeX\PowerApplierFactory;
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
        $base = $converter->convert($expression);

        if ($expression->hasPower()) {
            $powerApplier = PowerApplierFactory::get($expression::class);
            return $powerApplier->apply(
                $base,
                $this->convert($expression->getPower())
            );
        }

        return $base;
    }
}