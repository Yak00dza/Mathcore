<?php

namespace Mathcore\Converter\LaTeX\Expression;

use Mathcore\Converter\Container\ContainerConverter;
use Mathcore\Converter\LaTeX\LaTeXConverter;
use Mathcore\Expression\Expression;
use Mathcore\Factory\LaTeX\LaTeXConverterFactory;
use Mathcore\LaTeX\Value\LaTeXValue;
use Mathcore\Validator\TypeValidator;

/**
 * This class converts any expression into it's LaTeX representation.
 * This class is for your usage, using other specific converters is not recommended.
 */
class ExpressionConverter extends LaTeXConverter
{
    /**
     * Dependency is not injected here for the simplicity of class usage
     */
    public function __construct()
    {
        parent::__construct(new TypeValidator(Expression::class), new ContainerConverter($this));
    }

    public function convert(Expression $expression): LaTeXValue
    {
        $converter = LaTeXConverterFactory::get($expression::class);
        return $converter->convert($expression);
    }
}