<?php

namespace Onion\Framework\Client\Interfaces;

interface AdapterInterface
{
    public function getAddress(string $address, ?int $port = null): string;

    public function connect(string $address, ?int $port = null, int $timeout = 5): bool;
    public function send(string $data): string;
    public function disconnect(): bool;
}
