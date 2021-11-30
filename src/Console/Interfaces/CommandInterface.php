<?php

declare(strict_types=1);

namespace Onion\Framework\Console\Interfaces;

/**
 * Interface CommandInterface
 *
 * @package Onion\Framework\Console\Interfaces
 */
interface CommandInterface
{
    /**
     * @param ConsoleInterface $console The currently active console
     */
    public function trigger(ConsoleInterface $console): int;
}
