<?php

namespace Mathcore\Container;

use Mathcore\LaTeX\Value\LaTeXValue;

class LaTeXContainer extends AbstractContainer
{
    protected string $CONTAINED_TYPE = LaTeXValue::class;
}