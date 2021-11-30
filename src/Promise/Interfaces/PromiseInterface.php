<?php

namespace Onion\Framework\Promise\Interfaces;


interface PromiseInterface extends ThenableInterface
{
    public const PENDING = 'pending';
    public const REJECTED = 'rejected';
    public const FULFILLED = 'fulfilled';
    public const CANCELLED = 'cancelled';

    public function catch(callable $onRejected): static;
    public function otherwise(callable $onRejected): static;
    public function finally(callable ...$final): static;

    public function isPending(): bool;
    public function isFulfilled(): bool;
    public function isRejected(): bool;
}
