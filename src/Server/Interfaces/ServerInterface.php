<?php

declare(strict_types=1);

namespace Onion\Framework\Server\Interfaces;

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
