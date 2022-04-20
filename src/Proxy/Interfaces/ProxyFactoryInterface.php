<?php

declare(strict_types=1);

namespace Onion\Framework\Proxy\Interfaces;

use Closure;

interface ProxyFactoryInterface
{
    public function generate(string $class, Closure $initializer): object;
}
