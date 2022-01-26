<?php

declare(strict_types=1);

namespace Onion\Framework\Loop\Interfaces;

use Onion\Framework\Loop\Interfaces\ResourceInterface;

interface SocketInterface extends ResourceInterface
{
    public function accept(): ResourceInterface;
}
