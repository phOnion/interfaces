<?php

declare(strict_types=1);

namespace Onion\Framework\Promise\Interfaces;

interface AwaitableInterface extends PromiseInterface
{
    public function await(): mixed;
}
