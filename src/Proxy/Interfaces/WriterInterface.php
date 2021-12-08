<?php

declare(strict_types=1);

namespace Onion\Framework\Proxy\Interfaces;

use Laminas\Code\Generator\GeneratorInterface;

interface WriterInterface
{
    public function save(GeneratorInterface $reflection): bool;
}
