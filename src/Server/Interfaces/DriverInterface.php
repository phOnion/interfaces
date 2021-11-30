<?php

namespace Onion\Framework\Server\Interfaces;

interface DriverInterface
{
    public function getScheme(string $address): string;

    public function listen(string $address, ?int $port, ContextInterface ...$contexts): void;
}
