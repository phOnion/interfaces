<?php

declare(strict_types=1);

namespace Onion\Framework\Server\Interfaces;

use Closure;

interface DriverInterface
{
    public function listen(Closure $callback): void;
}
