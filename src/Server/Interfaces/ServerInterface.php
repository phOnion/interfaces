<?php

declare(strict_types=1);

namespace Onion\Framework\Server\Interfaces;

use Closure;

interface ServerInterface
{
    public function attach(DriverInterface $driver, Closure $callback): void;

    public function start(): void;
}
