<?php

declare(strict_types=1);

namespace Onion\Framework\Loop\Interfaces;

interface TaskInterface
{
    public function run();
    public function suspend(mixed $value = null): void;
    public function resume(mixed $value = null): bool;
    public function kill(): void;

    public function throw(\Throwable $exception): bool;

    public function isFinished(): bool;
    public function isPaused(): bool;
    public function isKilled(): bool;
}
