<?php

declare(strict_types=1);

namespace Onion\Framework\Router\Interfaces;

interface ParserInterface
{
    public function parse(string $pattern): string;
}
