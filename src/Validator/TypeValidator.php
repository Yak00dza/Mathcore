<?php

namespace Mathcore\Validator;

use InvalidArgumentException;

class TypeValidator
{
    private string $expected;

    public function __construct(string $expected)
    {
        $this->expected = $expected;
    }

    /**
     * @param object $input
     * @return void
     * @throws InvalidArgumentException
     */
    public function validate(object $input): void
    {
        if (!($input instanceof $this->expected))
        {
            throw new InvalidArgumentException();
        }
    }
}