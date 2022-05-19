<?php

declare(strict_types=1);

namespace Onion\Framework\Router\Interfaces;

use Closure;
use Psr\Http\Server\MiddlewareInterface;

interface RouteInterface
{
    public function getName(): string;
    public function getMethods(): array;
    public function getPattern(): string;
    public function getAction(): Closure;
    public function getParameters(): array;
    public function getParameter(string $name, mixed $default = null);

    public function hasName(): bool;
    public function hasMethod(string $method): bool;

    public function withMethods(array $methods): self;
    public function withAction(Closure|MiddlewareInterface $action): self;
    public function withParameters(array $parameters): self;
}
