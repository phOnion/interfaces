<?php

declare(strict_types=1);

namespace Onion\Framework\Loop\Interfaces;
use Onion\Framework\Loop\Types\Lock;

interface MutexInterface
{
    public static function acquire(object $target, Lock $type = Lock::EXCLUSIVE): bool;
    public static function release(object $target): bool;
}
