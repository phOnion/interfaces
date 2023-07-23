<?php

declare(strict_types=1);

namespace Onion\Framework\Loop\Interfaces;

interface MutexInterface
{
    public static function acquire(object $target, $type = LOCK_EX): bool;
    public static function release(object $target): bool;
}
