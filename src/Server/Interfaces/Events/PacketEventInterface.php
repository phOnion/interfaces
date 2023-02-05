<?php
declare(strict_types=1);

namespace Onion\Framework\Server\Interfaces\Events;
use Onion\Framework\Loop\Interfaces\ResourceInterface;

/**
 * Interface representing the availability of a UDP message on the stream
 */
interface PacketEventInterface
{
    public function stream(): ResourceInterface;
}
