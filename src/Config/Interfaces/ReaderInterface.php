<?php

declare(strict_types=1);

namespace Onion\Framework\Config\Interfaces;

interface ReaderInterface
{
    public function parse(string $filename): array;
}
