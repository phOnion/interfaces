<?php

declare(strict_types=1);

namespace Onion\Framework\Promise\Interfaces;

interface CancelableInterface extends PromiseInterface
{
    public function cancel(): void;
    public function isCanceled(): bool;
}
