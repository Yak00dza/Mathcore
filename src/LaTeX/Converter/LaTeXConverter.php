<?php

namespace Mathcore\LaTeX\Converter;

use Mathcore\Expression\Expression;
use Mathcore\Factory\Interface\FactorableInterface;
use Mathcore\LaTeX\Value\LaTeXValue;

abstract class LaTeXConverter implements FactorableInterface
{
    public abstract function convert(Expression $expression): LaTeXValue;
}