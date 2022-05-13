<?php

declare(strict_types=1);

namespace Onion\Framework\Promise\Interfaces;

/**
 * Represents a promise that can be awaited on
 */
interface AwaitableInterface extends PromiseInterface
{
    /**
     * Suspends further execution of the current function until the
     * promise has been resolved or rejected
     *
     * @throws \Throwable If the promise has been rejected, the exception
     * with which it has been rejected
     * @return mixed The value with which the promise has been resolved
     */
    public function await(): mixed;
}
