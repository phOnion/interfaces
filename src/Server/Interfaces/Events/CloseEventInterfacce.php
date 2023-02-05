<?php
declare(strict_types=1);

namespace Onion\Framework\Server\Interfaces\Events;
use Onion\Framework\Loop\Interfaces\ResourceInterface;

/**
 * Interface representing the closing of a TCP connection.
 */
interface CloseEventInterface
{
    public function connection(): ResourceInterface;
}
