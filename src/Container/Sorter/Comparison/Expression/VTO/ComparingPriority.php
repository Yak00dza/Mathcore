<?php

namespace Mathcore\Container\Sorter\Comparison\Expression\VTO;

class ComparingPriority
{
    public const BASE = 'base';

    public const POWER = 'power';

    public const PRIORITIES = [
        self::BASE,
        self::POWER
    ];
}