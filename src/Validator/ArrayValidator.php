<?php

namespace Mathcore\Validator;

use InvalidArgumentException;
use Mathcore\Expression\Expression;

class ArrayValidator
{
    private TypeValidator $validator;
    public function __construct(TypeValidator $validator)
    {
        $this->validator = $validator;
    }

    /**
     * @param array $input
     * @return void
     * @throws InvalidArgumentException
     */
    public function validate(array $input): void
    {
        foreach ($input as $object) {
            $this->validator->validate($object);
        }
    }
}