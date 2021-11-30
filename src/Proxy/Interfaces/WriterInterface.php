<?php

declare(strict_types=1);

namespace Onion\Framework\Proxy\Interfaces;

use Laminas\Code\Generator\ClassGenerator;

interface WriterInterface
{
    public function save(ClassGenerator $reflection): bool;
}
