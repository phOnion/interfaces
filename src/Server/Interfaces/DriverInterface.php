<?php

declare(strict_types=1);

namespace Onion\Framework\Server\Interfaces;

interface DriverInterface
{
    public function listen(string $address, ?int $port, ContextInterface ...$contexts): void;
}
