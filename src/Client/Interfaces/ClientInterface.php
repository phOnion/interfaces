<?php

declare(strict_types=1);

namespace Onion\Framework\Client\Interfaces;

use Onion\Framework\Promise\Interfaces\PromiseInterface;

interface ClientInterface
{
    // public function on(string $event, callable $callback): void;
    // public function proxy(StreamInterface $stream): void;
    // public function connect(): PromiseInterface;
    public function connect(string $address, int $port = null, int $timeout = 5): void;
    public function send(string $data): string;
}
