<?php

namespace Mathcore\Converter\LaTeX\Exponentiation;

use Mathcore\LaTeX\Value\LaTeXValue;

class FunctionPowerApplier extends StandardPowerApplier
{
    public function apply(LaTeXValue $base, LaTeXValue $power): LaTeXValue
    {
        return new LaTeXValue(str_replace(
           '(',
           '^{'.$power.'}(',
           $base
        ));
    }
}