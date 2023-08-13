<?php

namespace Onion\Framework\Client\Interfaces;

use Onion\Framework\Loop\Interfaces\ResourceInterface;

interface ClientInterface
{
    public static function connect(
        string $address,
        ContextInterface ...$context,
    ): ResourceInterface;
}
