<?php

declare(strict_types=1);

namespace Onion\Framework\Loop\Interfaces;

use Onion\Framework\Loop\Types\Operation;

interface ResourceInterface
{
    public function read(int $size): string;
    public function write(string $data): int;
    public function close(): bool;

    public function block(): bool;
    public function unblock(): bool;

    public function lock(int $lockType = LOCK_NB | LOCK_SH): bool;
    public function unlock(): bool;

    public function wait(Operation $operation = Operation::READ);

    public function getResource();
    public function getResourceId(): int;

    public function eof(): bool;
    /**
     * @deprecated
     * @see ResourceInterface::eof
     */
    public function isAlive(): bool;
}
