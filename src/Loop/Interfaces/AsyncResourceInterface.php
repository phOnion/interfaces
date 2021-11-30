<?php

namespace Onion\Framework\Loop\Interfaces;

interface AsyncResourceInterface extends ResourceInterface
{
    public const OPERATION_READ = 1;
    public const OPERATION_WRITE = 2;

    public function block(): bool;
    public function unblock(): bool;

    public function wait(int $operation = self::OPERATION_READ);
}
