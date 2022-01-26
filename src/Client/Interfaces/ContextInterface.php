<?php

declare(strict_types=1);

namespace Onion\Framework\Client\Interfaces;

interface ContextInterface
{
    public function getContextArray(): array;
    public function getContextOptions(): array;
}
