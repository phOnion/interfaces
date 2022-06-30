<?php

declare(strict_types=1);

namespace Onion\Framework\Promise\Interfaces;

use Closure;

/**
 * Represents a promise
 */
interface PromiseInterface extends ThenableInterface
{
    public function catch(Closure $onRejected): static;
    public function finally(Closure $onFinally): static;
}
