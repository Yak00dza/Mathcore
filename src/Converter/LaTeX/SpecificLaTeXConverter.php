<?php

namespace Mathcore\Converter\LaTeX;

use Mathcore\Converter\Container\ContainerConverter;
use Mathcore\Converter\Interface\ConverterInterface;
use Mathcore\Expression\Expression;
use Mathcore\Factory\Interface\FactorableInterface;
use Mathcore\LaTeX\Value\LaTeXValue;
use Mathcore\Validator\TypeValidator;

/**
 * SpecificLaTeX converters are capable of converting only one specific type of expressions into their LaTeX form.
 * It utilizes the UniversalLaTeXConverter to process the additional expressions, e.g. function arguments.
 * This class is not meant to be used in your project. You should use UniversalLaTeXConverter instead.
 * The main reason for this is a lack of exponentiation. Specific converters ignore any powers.
 * Exponentiation is only present in UniversalLaTeXConverter
 */
abstract class SpecificLaTeXConverter implements FactorableInterface, ConverterInterface
{
    protected TypeValidator $typeValidator;

    protected ContainerConverter $containerConverter;

    protected UniversalLaTeXConverter $internalConverter;
    public function __construct(
        TypeValidator $typeValidator,
        ContainerConverter $containerConverter,
        UniversalLaTeXConverter $internalConverter
    ) {
        $this->typeValidator = $typeValidator;
        $this->containerConverter = $containerConverter;
        $this->internalConverter = $internalConverter;
    }

    public abstract function convert(Expression $expression): LaTeXValue;
}