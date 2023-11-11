<?php

namespace Mathcore\Expression\Independent;

use Mathcore\Expression\Expression;

class Variable extends Expression
{
    private string $name;

    public function __construct(string $name, Expression $power = null)
    {
        $this->name = $name;
        parent::__construct($power);
    }

    public function getName():string
    {
        return $this->name;
    }
}