<?php

declare(strict_types=1);

namespace Onion\Framework\Promise\Interfaces;

/**
 * Represents a promise
 */
interface PromiseInterface extends ThenableInterface
{
    public function catch(callable $onRejected): static;
    public function finally(callable $onFinally): static;
}
