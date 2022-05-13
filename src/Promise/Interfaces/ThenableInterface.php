<?php

declare(strict_types=1);

namespace Onion\Framework\Promise\Interfaces;

use Closure;

interface ThenableInterface
{
    /**
     * Sets functions used to handle promise resolution or rejection
     *
     * @param null|callable $onFulfilled
     * @param null|callable $onRejected
     * @return static
     */
    public function then(
        ?Closure $onFulfilled = null,
        ?Closure $onRejected = null,
    ): static;
}
