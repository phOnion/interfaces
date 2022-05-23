<?php

declare(strict_types=1);

namespace Onion\Framework\Router\Interfaces;

use Closure;
use IteratorAggregate;
use Psr\Http\Server\MiddlewareInterface;

interface CollectorInterface extends IteratorAggregate
{
    public function add(array $methods, string $path, Closure|MiddlewareInterface $action): void;
}
