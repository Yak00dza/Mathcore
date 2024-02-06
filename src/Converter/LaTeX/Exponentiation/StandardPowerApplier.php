<?php

namespace Mathcore\Converter\LaTeX\Exponentiation;

use Mathcore\Factory\Interface\FactorableInterface;
use Mathcore\LaTeX\Value\LaTeXValue;

class StandardPowerApplier implements FactorableInterface
{
    protected static string $format = '%s^{%s}';
    public function apply(LaTeXValue $base, LaTeXValue $power): LaTeXValue
    {
        return new LaTeXValue(sprintf(
            static::$format,
            $base,
            $power
        ));
    }
}