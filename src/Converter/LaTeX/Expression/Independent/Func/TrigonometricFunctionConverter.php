<?php

namespace Mathcore\Converter\LaTeX\Expression\Independent\Func;

use InvalidArgumentException;
use Mathcore\Container\LaTeXContainer;
use Mathcore\Converter\LaTeX\LaTeXConverter;
use Mathcore\Expression\Expression;
use Mathcore\Expression\Independent\Func\TrigonometricFunction;
use Mathcore\LaTeX\Value\LaTeXValue;

class TrigonometricFunctionConverter extends LaTeXConverter
{
    public function convert(Expression $expression): LaTeXValue
    {
        /**@var TrigonometricFunction $expression */
        $this->typeValidator->validate($expression);
        return new LaTeXValue(sprintf(
            '\\%s(%s)',
            $expression->getName(),
            implode(', ',
                $this->containerConverter->convert($expression->getArguments(),
                    LaTeXContainer::class)->toArray()
            )
        ));
    }
}