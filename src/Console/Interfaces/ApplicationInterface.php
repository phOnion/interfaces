<?php

declare(strict_types=1);

namespace Onion\Framework\Console\Interfaces;

interface ApplicationInterface
{
    public function run(array $argv, ConsoleInterface $console);
}
