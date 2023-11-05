<?php

namespace Mathcore\Converter\Container;

use Mathcore\Container\AbstractContainer;
use Mathcore\Converter\Interface\ConverterInterface;

class ContainerConverter implements ConverterInterface
{
    private ConverterInterface $converter;

    public function __construct(ConverterInterface $converter)
    {
        $this->converter = $converter;
    }

    public function convert(AbstractContainer $container, string $containerType): AbstractContainer
    {
        /**
         * @var AbstractContainer $result
         */
        $result = new $containerType();
        $result->addArray(array_map([$this->converter, 'convert'], $container->toArray()));
        return $result;
    }
}