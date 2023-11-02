<?php

namespace MAthcore\Container\Exception;
use Exception;

class InvalidContainableTypeException extends Exception
{ 
    public function __construct(string $expected, string $actual)
    {
        parent::__construct(
            sprintf("Invalid containable type. Expected %s, but got %s", $expected, $actual),
        );
    }
}