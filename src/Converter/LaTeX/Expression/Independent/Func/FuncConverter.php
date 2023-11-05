<?php

namespace Mathcore\Converter\LaTeX\Expression\Independent\Func;

use Mathcore\Container\LaTeXContainer;
use Mathcore\Converter\LaTeX\LaTeXConverter;
use Mathcore\Expression\Expression;
use Mathcore\Expression\Independent\Func\Func;
use Mathcore\Expression\Independent\Func\TrigonometricFunction;
use Mathcore\LaTeX\Value\LaTeXValue;

class FuncConverter extends LaTeXConverter
{
    public function convert(Expression $expression): LaTeXValue
    {
        /**@var Func $expression */
        $this->typeValidator->validate($expression);
        return new LaTeXValue(sprintf(
            '%s(%s)',
            $expression->getName(),
            implode(', ',
                $this->containerConverter->convert($expression->getArguments(),
                    LaTeXContainer::class)->toArray()
            )
        ));
    }
}