<?php

namespace Mathcore\Converter\LaTeX;

use Mathcore\Converter\Container\ContainerConverter;
use Mathcore\Converter\Interface\ConverterInterface;
use Mathcore\Expression\Expression;
use Mathcore\Factory\Interface\FactorableInterface;
use Mathcore\LaTeX\Value\LaTeXValue;
use Mathcore\Validator\TypeValidator;

abstract class LaTeXConverter implements FactorableInterface, ConverterInterface
{
    protected TypeValidator $typeValidator;

    protected ContainerConverter $containerConverter;
    public function __construct(TypeValidator $typeValidator, ContainerConverter $containerConverter)
    {
        $this->typeValidator = $typeValidator;
        $this->containerConverter = $containerConverter;
    }

    public abstract function convert(Expression $expression): LaTeXValue;
}