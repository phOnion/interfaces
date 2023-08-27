<?php

declare(strict_types=1);

namespace Onion\Framework\Server\Interfaces;

use Closure;
use Psr\EventDispatcher\EventDispatcherInterface;

interface DriverInterface
{
    public function listen(EventDispatcherInterface $dispatcher, Closure $callback): void;
}
