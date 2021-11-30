<?php

namespace Onion\Framework\Loop\Interfaces;

interface ResourceInterface
{
    public function read(int $size): string;
    public function write(string $data): int;
    public function close(): bool;

    public function getResource();
    public function getResourceId(): int;

    public function isAlive(): bool;
}
