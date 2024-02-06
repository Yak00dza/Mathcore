<?php

namespace Mathcore\Expression\VTO;

/**
 * Exponentiation rule tells the package how to apply the power when converting your expression to LaTeX form etc.
 */
class ExponentiationRule
{
    /**
     * Gives a result in form of x^a
     */
    public const STANDARD = 'Standard';

    public const BRACKETS = 'Brackets';

    /**
     * Gives a result in form of f^a(x)
     */
    public const FUNCTION = 'Function';

    public const RULES = [
        self::STANDARD,
        self::FUNCTION,
        self::BRACKETS,
    ];
}