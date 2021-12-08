<?php

declare(strict_types=1);

namespace Onion\Framework\Loop\Interfaces;

use Throwable;

interface CoroutineInterface
{
    public function send(mixed $result): void;
    public function throw(Throwable $exception): void;
    public function run(): mixed;
    public function valid(): bool;
    public static function task(): TaskInterface;

    public function suspend(mixed $value): mixed;
    public function resume(mixed $value): mixed;
    public function isRunning(): bool;
    public function isTerminated(): bool;
    public function isPaused(): bool;
}
