<?php

namespace Mathcore\Container;

use Mathcore\LaTeX\Value\LaTeXValue;

class LaTeXContainer extends AbstractContainer
{
    protected static string $containedType = LaTeXValue::class;
}