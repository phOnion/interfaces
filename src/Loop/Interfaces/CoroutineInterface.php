<?php

declare(strict_types=1);

namespace Onion\Framework\Loop\Interfaces;

use Throwable;

/**
 * A wrapper for \Fiber
 */
interface CoroutineInterface
{
    /**
     * Set data to be passed to the underlying fiber's suspension point
     *
     * @param mixed $data
     * @return void
     */
    public function send(mixed $data): void;

    /**
     * Set an exception to throw at the underlying fiber's suspension
     * point
     *
     * @param Throwable $exception The exception to be thrown
     * @return void
     */
    public function throw(Throwable $exception): void;

    /**
     * Start (or resume if suspended) the underlying fiber and sends the
     * provided data or throws the provided exception
     *
     * @return mixed The data to elevate from the suspension point
     * or the result returned from the fiber
     */
    public function run(): mixed;

    /**
     * Suspend the underlying fiber and elevating the provided value
     * @param mixed $value Value to elevate
     * @return void
     */
    public function suspend(mixed $value): void;

    /**
     * Retrieves the task which is executing the current coroutine
     *
     * @return TaskInterface
     */
    public static function task(): TaskInterface;

    /**
     * Checks if the current coroutine is running
     *
     * @return bool
     */
    public function isRunning(): bool;

    /**
     * Checks if the current coroutine has been terminated or not
     *
     * @return bool
     */
    public function isTerminated(): bool;

    /**
     * Checks if the current coroutine has been suspended or not
     *
     * @return bool
     */
    public function isPaused(): bool;
}
