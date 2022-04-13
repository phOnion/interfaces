<?php

declare(strict_types=1);

namespace Onion\Framework\Proxy\Interfaces;

interface WriterInterface
{
    public function save(string $className, string $code): bool;
}
