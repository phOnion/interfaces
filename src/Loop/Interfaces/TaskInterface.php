<?php

namespace Onion\Framework\Loop\Interfaces;

use Onion\Framework\Loop\Channel;

interface TaskInterface
{
    public function run();
    public function suspend(mixed $value = null): mixed;
    public function resume(mixed $value = null): bool;
    public function kill(): void;

    public function throw(\Throwable $exception): bool;

    public function isFinished(): bool;
    public function isPaused(): bool;
    public function isKilled(): bool;
}
