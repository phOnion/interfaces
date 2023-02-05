<?php
declare(strict_types=1);

namespace Onion\Framework\Server\Interfaces\Events;
use Onion\Framework\Loop\Interfaces\ResourceInterface;

/**
 * Interface representing the accepting of TCP connection event
 */
interface ConnectEventInterface
{
    public function connection(): ResourceInterface;
    public function address(): ?string;
    public function port(): ?int;
}
