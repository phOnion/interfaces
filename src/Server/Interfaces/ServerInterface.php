<?php

namespace Onion\Framework\Server\Interfaces;

use Onion\Framework\Loop\Coroutine;

interface ServerInterface
{
    public function attach(
        DriverInterface $driver,
        string $address,
        ?int $port = null,
        ContextInterface ...$contexts
    ): void;

    public function start(): void;
}
