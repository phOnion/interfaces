<?php

declare(strict_types=1);

namespace Onion\Framework\Console\Interfaces;

/**
 * Interface CommandInterface
 *
 * @package Onion\Framework\Console\Interfaces
 */
interface SignalAwareCommandInterface
{
    /**
     * @param ConsoleInterface $console The currently active console
     * @param string $signal The received termination signal
     *
     * @return void
     */
    public function exit(ConsoleInterface $console, string $signal): void;
}
