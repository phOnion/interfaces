<?php

namespace Onion\Framework\Promise\Interfaces;

use Throwable;

interface DeferredInterface
{
    public function promise(): PromiseInterface;

    public function resolve(mixed $value): void;
    public function reject(Throwable $exception): void;
}
