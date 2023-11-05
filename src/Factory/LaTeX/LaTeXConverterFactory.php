<?php

namespace Mathcore\Factory\LaTeX;
use Mathcore\Converter\Container\ContainerConverter;
use Mathcore\Converter\LaTeX\Expression\ExpressionConverter;
use Mathcore\Converter\LaTeX\LaTeXConverter;
use Mathcore\Factory\Interface\FactoryInterface;
use Mathcore\Validator\TypeValidator;

class LaTeXConverterFactory implements FactoryInterface
{
    public static function get(string $class): LaTeXConverter
    {
        /**
         * @var LaTeXConverter $converter
         */
        $converter =  str_replace('Expression', 'Converter\\LaTeX\\Expression', $class).'Converter';

        return new $converter(new TypeValidator($class), new ContainerConverter(new ExpressionConverter()));
    }
}