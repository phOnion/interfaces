<?php

declare(strict_types=1);

namespace Onion\Framework\Loop\Interfaces;

use Onion\Framework\Promise\Interfaces\DeferredInterface;
use Onion\Framework\Promise\Interfaces\PromiseInterface;
use Throwable;

interface TaskInterface
{
    /**
     * Wrapper for CoroutineInterface::run()
     *
     * @see CoroutineInterface::run()
     */
    public function run(): mixed;

    /**
     * @see CoroutineInterface::suspend()
     */
    public function suspend(mixed $value = null): void;

    /**
     * @see CoroutineInterface::resume()
     */
    public function resume(mixed $value = null): bool;

    /**
     * Terminate the execution of the task by as soon as the next tick
     * occurs
     *
     * @return void
     */
    public function kill(): void;

    /**
     * @see CoroutineInterface::throw()
     *
     * @return bool if the exception will successfully be thrown in the coroutine
     */
    public function throw(Throwable $exception): bool;

    /**
     * Checks if the current task has finished executing
     *
     * @return bool
     */
    public function isFinished(): bool;

    /**
     * Check if the current task has been suspended
     *
     * @return bool
     */
    public function isPaused(): bool;

    /**
     * Checks if the current task has been terminated prematurely
     *
     * @return bool
     */
    public function isKilled(): bool;

    /**
     * Retrieve a deferred for the task execution. Allows access to the
     * result of the task via the `promise()` method or its exception.
     *
     * @return DeferredInterface
     */
    public function deferred(): DeferredInterface;

    /**
     * Force the coroutine to 'sync' forcing its parent coroutine to
     * halt until the current one completes, making it behave like a
     * synchronous of regular PHP code and avoiding the callback/promise hell.
     *
     * @return mixed The return value of the coroutine
     */
    public function sync(): mixed;
}
