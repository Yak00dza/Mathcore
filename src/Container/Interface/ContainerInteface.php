<?php

namespace Mathcore\Container\Interface;

interface ContainerInteface
{
    public function addItem(ContainableInteface $item): void;

    public function toArray(): array;
}