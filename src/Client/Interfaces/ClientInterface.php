<?php

namespace Onion\Framework\Client\Interfaces;

use Onion\Framework\Loop\Interfaces\ResourceInterface;

interface ClientInterface
{
    public static function setClientCryptoProtocol(int $protocol): void;

    public static function connect(
        string $address,
        ?float $timeout,
        ContextInterface ...$context,
    ): ResourceInterface;

    public static function send(
        string $address,
        string $data,
        ?float $timeout = null,
        array $contexts = [],
    ): ResourceInterface;
}
