<?php

namespace Mathcore\Factory\Converter\LaTeX;

use Mathcore\Converter\LaTeX\Exponentiation\StandardPowerApplier;
use Mathcore\Expression\Expression;
use Mathcore\Factory\Interface\FactoryInterface;

class PowerApplierFactory implements FactoryInterface
{

    public static function get(string $class): StandardPowerApplier
    {
        /** @var Expression $class */
        $rule = $class::getExponentiationRule();
        $applier = str_replace('Standard', $rule, StandardPowerApplier::class);
        return new $applier;
    }
}