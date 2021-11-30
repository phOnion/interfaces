<?php

namespace Onion\Framework\Loop\Interfaces;

interface LockableResourceInterface extends ResourceInterface
{
    public function lock(int $lockType = LOCK_NB | LOCK_SH): bool;
    public function unlock(): bool;
}
