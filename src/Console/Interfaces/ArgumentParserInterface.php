<?php

declare(strict_types=1);

namespace Onion\Framework\Console\Interfaces;

interface ArgumentParserInterface
{
    public function parse(array &$arguments, array $params = []): array;
}
