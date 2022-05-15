<?php

declare(strict_types=1);

namespace Onion\Framework\Dependency\Interfaces;

use Closure;
use Psr\Container\ContainerInterface as Container;

/**
 * Interface defining the required signature of a contextual factory.
 * Defines the basics for the Abstract Factory pattern
 *
 * @package Onion\Framework\Dependency\Interfaces
 */
interface ContextFactoryInterface extends FactoryInterface
{
    /**
     * This method is invoked the same as `FactoryInterface::build` but
     * also receives the id with which the dependency has been requested
     * allowing to switch the result based on the registered aliases.
     *
     * @param Container $container
     * @param string $key
     *
     * @return FactoryInterface|Closure
     */
    public function build(Container $container, string $key = null): mixed;
}
