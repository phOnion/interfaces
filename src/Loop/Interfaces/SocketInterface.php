<?php

namespace Onion\Framework\Loop\Interfaces;

use Onion\Framework\Loop\Interfaces\AsyncResourceInterface;

interface SocketInterface extends AsyncResourceInterface
{
    public function accept(): ResourceInterface;
}
