<?php

declare(strict_types=1);

namespace Onion\Framework\Server\Interfaces;

interface ServerInterface
{
    public function attach(DriverInterface $driver): void;

    public function start(): void;
}
