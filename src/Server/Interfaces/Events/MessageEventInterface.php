<?php
declare(strict_types=1);

namespace Onion\Framework\Server\Interfaces\Events;
use Onion\Framework\Loop\Interfaces\ResourceInterface;

/**
 * Interface representing the availability of a TCP message on the connection
 */
interface MessageEventInterface
{
    public function connection(): ResourceInterface;
}
