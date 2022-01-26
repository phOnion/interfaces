<?php

declare(strict_types=1);

namespace Onion\Framework\Promise\Interfaces;

interface ThenableInterface
{
    public function then(?callable $onFulfilled = null, ?callable $onRejected = null): static;
}
