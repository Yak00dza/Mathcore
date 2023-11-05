<?php

namespace Mathcore\Factory\Interface;

interface FactoryInterface
{
    public static function get(string $class): FactorableInterface;
}