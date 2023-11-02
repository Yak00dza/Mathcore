<?php

namespace Mathcore\Factory\LaTeX;
use Mathcore\Factory\Interface\FactoryInterface;
use Mathcore\LaTeX\Converter\LaTeXConverter;
use Mathcore\LaTeX\Value\LaTeXValue;

class LaTeXConverterFactory implements FactoryInterface
{
    public function get(string $class): LaTeXConverter
    {
        $converter = str_replace('Expression', 'LaTeX\\\\Converter\\\\Expression', $class).'Converter';

        return new $converter();
    }
}