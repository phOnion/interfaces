<?php

declare(strict_types=1);

namespace Onion\Framework\Loop\Interfaces\Channels;

use ArrayAccess;

interface ChannelValueInterface extends ArrayAccess
{
    /**
     * The actual value
     *
     * @return mixed Returns the data sent or `null` if the channel has
     * been closed
     */
    public function value(): mixed;

    /**
     * Indicates if the receiving end should expect additional data to be
     * sent through the channel or not. It will also return `true` if the
     * channel has pending data after it has been closed.
     *
     * @return bool
     */
    public function ok(): bool;
}
