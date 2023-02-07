<?php

declare(strict_types=1);

namespace Onion\Framework\Loop\Interfaces;

use Onion\Framework\Loop\Interfaces\ResourceInterface;

/**
 * Represents a network resource
 */
interface SocketInterface extends ResourceInterface
{
    /**
     * Attempt to accept a connection on the underlying resource
     *
     * @return ResourceInterface A new resource that represents the
     * accepted connection
     */
    public function accept(?int $timeout = null): ResourceInterface;
}
