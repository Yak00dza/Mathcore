<?php

namespace Mathcore\Factory\Converter\LaTeX;
use Mathcore\Converter\Container\ContainerConverter;
use Mathcore\Converter\LaTeX\SpecificLaTeXConverter;
use Mathcore\Converter\LaTeX\UniversalLaTeXConverter;
use Mathcore\Factory\Interface\FactoryInterface;
use Mathcore\Validator\TypeValidator;

class LaTeXConverterFactory implements FactoryInterface
{
    public static function get(string $class): SpecificLaTeXConverter
    {
        /**
         * @var SpecificLaTeXConverter $converter
         */
        $converter =  str_replace('Expression', 'Converter\\LaTeX\\Expression', $class).'Converter';

        return new $converter(
            new TypeValidator($class),
            new ContainerConverter(new UniversalLaTeXConverter()),
            new UniversalLaTeXConverter()
        );
    }
}