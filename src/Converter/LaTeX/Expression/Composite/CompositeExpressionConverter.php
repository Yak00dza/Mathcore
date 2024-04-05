<?php

namespace Mathcore\Converter\LaTeX\Expression\Composite;

use Mathcore\Container\LaTeXContainer;
use Mathcore\Converter\LaTeX\SpecificLaTeXConverter;
use Mathcore\Expression\Composite\CompositeExpression;
use Mathcore\Expression\Expression;
use Mathcore\LaTeX\Value\LaTeXValue;

abstract class CompositeExpressionConverter extends SpecificLaTeXConverter
{
    protected static string $separator = '';
    public function convert(Expression $expression): LaTeXValue
    {
        /** @var CompositeExpression $expression */
        $this->typeValidator->validate($expression);

        $container = $expression->getItems();

        $container = $this->containerConverter->convert($container, LaTeXContainer::class);

        $array = $container->toArray();

        for ($i = 0; $i < sizeof($array); $i++) {
            if ($array[$i]->getValue()[0] === '-') {
                $array[$i] = '('.$array[$i].')';
            }
        }
        return new LaTeXValue(implode(static::$separator, $array));
    }
}