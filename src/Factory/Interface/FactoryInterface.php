<?php

namespace Mathcore\Factory\Interface;

interface FactoryInterface
{
    public function get(string $class): FactorableInterface;
}