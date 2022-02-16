<?php

namespace Onion\Framework\Client\Interfaces;

use Onion\Framework\Loop\Interfaces\ResourceInterface;

interface ClientInterface
{
    public static function send(
        string $address,
        string $data,
        ?float $timeout = null,
        array $contexts = [],
    ): ResourceInterface;
}
