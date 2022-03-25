<?php

declare(strict_types=1);

namespace Onion\Framework\State\Interfaces;

use Traversable;

interface HistoryInterface extends Traversable
{
    public function add(string $from, string $to, array $arguments): void;
}
