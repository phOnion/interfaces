<?php

declare(strict_types=1);

namespace Onion\Framework\Loop\Interfaces;
use Onion\Framework\Loop\Types\LockType;

interface MutexInterface
{
    public static function acquire(object $target, LockType $type = LockType::EXCLUSIVE): bool;
    public static function release(object $target): bool;
}
