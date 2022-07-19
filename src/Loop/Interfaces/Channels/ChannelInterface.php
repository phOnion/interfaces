<?php

declare(strict_types=1);

namespace Onion\Framework\Loop\Interfaces\Channels;

interface ChannelInterface
{
    /**
     * Send data through the channel
     *
     * @param mixed $data The data to send over the channel
     *
     * @return bool True on success or false if the channel has been
     * closed
     */
    public function send(mixed ...$data): bool;

    /**
     * Receive data from the channel, if any is available
     *
     * @return ChannelValueInterface
     */
    public function recv(): ChannelValueInterface;

    /**
     * Close the channel to prevent any additional publishing of data
     *
     * @return void
     */
    public function close(): void;
}
