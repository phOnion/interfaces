<?php

declare(strict_types=1);

namespace Onion\Framework\Dependency\Interfaces;

use Closure;
use Onion\Framework\Dependency\Interfaces\FactoryInterface;
use Psr\Container\ContainerInterface as PsrContainerInterface;
use Onion\Framework\Dependency\Interfaces\ServiceProviderInterface;

interface ContainerInterface extends PsrContainerInterface
{
    public function register(ServiceProviderInterface $provider): void;

    public function singleton(string $id, string|Closure|FactoryInterface $binding): static;
    public function bind(string $id, string|Closure|FactoryInterface $binding): static;

    public function alias(string $alias, string $identifier): static;

    public function extend(string $className, Closure $decorator): static;
}
