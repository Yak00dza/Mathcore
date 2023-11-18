<?php

namespace Mathcore\Converter\LaTeX\Expression\Composite;

use Mathcore\Container\LaTeXContainer;
use Mathcore\Container\Sorter\Expression\ExpressionOrderSorter;
use Mathcore\Converter\LaTeX\SpecificLaTeXConverter;
use Mathcore\Expression\Composite\CompositeExpression;
use Mathcore\Expression\Composite\Monomial;
use Mathcore\Expression\Expression;
use Mathcore\Factory\Container\Sorter\ExpressionOrderSorterFactory;
use Mathcore\Factory\Container\Sorter\SorterFactory;
use Mathcore\LaTeX\Value\LaTeXValue;

abstract class CompositeExpressionConverter extends SpecificLaTeXConverter
{
    protected static string $separator = '';
    public function convert(Expression $expression): LaTeXValue
    {
        /** @var CompositeExpression $expression */
        $this->typeValidator->validate($expression);

        $container = $expression->getItems();

        $sorter = ExpressionOrderSorterFactory::get($expression::class);

        /** @var ExpressionOrderSorter $sorter */
        $container = $sorter->sort($container);
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