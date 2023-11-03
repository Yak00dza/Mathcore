<?php

namespace Mathcore\Container\Interface;

interface ContainerInteface
{
    public function addItem(ContainableInterface $item): void;

    public function toArray(): array;
}