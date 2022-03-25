<?php

declare(strict_types=1);

namespace Onion\Framework\Dependency\Interfaces;

use Closure;
use Psr\Container\ContainerInterface as Container;

/**
 * Interface defining the required signature of a factory builder.
 * Defines the basics for the Abstract Factory pattern
 *
 * @package Onion\Framework\Dependency\Interfaces
 */
interface FactoryBuilderInterface
{
    /**
     * This method is invoked similarly to `FactoryInterface::build` but
     * instead of having to return a configured object, it must return a
     * configured factory for the object to be resolved by the container.
     *
     * @param Container $container
     * @param string $key
     *
     * @return FactoryInterface|Closure
     */
    public function build(Container $container, string $key): FactoryInterface | Closure;
}
