<?php

declare(strict_types=1);

namespace Onion\Framework\Proxy;

interface ProxyInterface
{
    public function getWrappedInstance(): mixed;
}
