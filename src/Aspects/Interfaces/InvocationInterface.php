<?php

declare(strict_types=1);

namespace Onion\Framework\Aspects\Interfaces;

interface InvocationInterface
{
    public function isTerminated(): bool;
    public function hasThrown(): bool;
    public function getTarget(): array;
    public function getArguments(): ?array;
}
