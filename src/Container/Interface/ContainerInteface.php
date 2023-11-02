<?php

namespace Mathcore\Container\Inteface;

interface ContainerInteface
{
    public function addItem(ContainableInteface $item): void;

    public function toArray(): array;
}