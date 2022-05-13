<?php

declare(strict_types=1);

namespace Onion\Framework\Loop\Interfaces;

/**
 * Represents a running timer
 */
interface TimerInterface
{
    /**
     * Stops a timer from being executed, if it has already been executed
     * and is not a repeating timer calling this function will not have
     * any effect
     *
     * @return void
     */
    public function stop(): void;
}
