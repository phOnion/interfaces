<?php

namespace Onion\Framework\Promise\Interfaces;

use Throwable;

interface DeferredInterface
{
    /**
     * Check if the deferred object has been resolved or is still
     * pending its resolution
     *
     * @return bool
     */
    public function completed(): bool;

    /**
     * Retrieve the current deferred
     * @return PromiseInterface
     */
    public function promise(): PromiseInterface;

    /**
     * Resolve the current deferred object with the provided $value
     *
     * @param mixed $value
     * @return void
     */
    public function resolve(mixed $value): void;

    /**
     * Reject the current deferred object with the provided $exception
     *
     * @param Throwable $exception
     * @return void
     */
    public function reject(Throwable $exception): void;
}
