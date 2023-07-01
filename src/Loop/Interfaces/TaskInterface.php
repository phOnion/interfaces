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

    /**
     * Automatic factory for replicating the current task. This is useful
     * when you want to run the same task multiple times in parallel.
     * Internally it is used to implement task persistance i.e have a
     * single task run multiple times, most applicable to stream tasks,
     * where an individual listener that is supposed to get triggered once
     * every time a new connection is received.
     *
     * The task returned by this method *MUST* not have it's `isPersistent()`
     * method return true, otherwise it will cause an infinite loop of zombie
     * tasks that are not referenced by user-land and there will be no way to
     * interact with them.
     */
    public function spawn(): TaskInterface;

    /**
     * Indicate whether the task is persistent or not. A persistent task
     * does not get registered to the loop directly but rather it is
     * `spawn()`ed every time it is scheduled to run. In order to terminate
     * a persistent task, the `kill()` method must be called on the which will
     * prevent the task from being spawned again.
     */
    public function isPersistent(): bool;
}
