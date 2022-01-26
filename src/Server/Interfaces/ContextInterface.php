<?php

declare(strict_types=1);

namespace Onion\Framework\Server\Interfaces;

interface ContextInterface
{
    public function getContextArray(): array;
    public function getContextOptions(): array;
}
