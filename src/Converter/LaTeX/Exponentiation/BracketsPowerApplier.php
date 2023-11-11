<?php

namespace Mathcore\Converter\LaTeX\Exponentiation;

use Mathcore\Converter\LaTeX\Exponentiation\StandardPowerApplier;

class BracketsPowerApplier extends StandardPowerApplier
{
    protected static string $format = '(%s)^{%s}';

}