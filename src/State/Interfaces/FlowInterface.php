<?php

declare(strict_types=1);

namespace Onion\Framework\State\Interfaces;

interface FlowInterface
{
    public function addTransition(string $from, string $to, \Closure $transition): void;
    public function getState(): string;
    public function getBranches(): ?array;

    public function apply(string $state, object $target, mixed ...$arguments): bool;
    public function can(string $state): bool;

    public function reset(): FlowInterface;
}
