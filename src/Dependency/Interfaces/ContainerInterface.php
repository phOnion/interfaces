<?php

declare(strict_types=1);

namespace Onion\Framework\Dependency\Interfaces;

use Closure;
use Psr\Container\ContainerInterface as PsrContainerInterface;
use Onion\Framework\Dependency\Interfaces\ServiceProviderInterface;

interface ContainerInterface extends PsrContainerInterface
{
    /**
     * Registers the given ServiceProvider with the container
     * @param ServiceProviderInterface $provider
     * @return void
     */
    public function register(ServiceProviderInterface $provider): void;

    /**
     * Registers a dependency identified by $service with the container as
     * a singleton instance that will be resolved on the first retrieval
     * and afterwards the same shared instance will be returned
     *
     * @param string $service The identifier of the dependency
     * @param string|object $binding The same behavior as bind, with the
     * only difference that a manually created instance can be injected
     * to short circuit the initialization process
     *
     * @see ContainerInterface::bind()
     *
     * @return static
     */
    public function singleton(string $service, string|object $binding): static;

    /**
     * Registers a dependency identified by $service with the container as
     * a singleton instance that will be resolved on the first retrieval
     * and from then on the same shared instance will be returned to
     * every request
     *
     * @param string $service The identifier of the dependency
     * @param string|object $binding A string representing the concrete
     * implementation or the identifier in one of the attached containers
     * (if any), an instance of FactoryInterface/ContextFactoryInterface
     * to use as a factory that will build the instance or a closure
     * that will return the instance
     *
     * @return static
     */
    public function bind(string $service, string|Closure|FactoryInterface $binding): static;

    /**
     * Register an alias for a $service to allow retrieval by it. This
     * could be especially useful when using a contextual factory that
     * will receive the $id with which an object has been requested
     * allowing to return a different result based on the retrieval key
     *
     * @param string $alias Alias to register for the service
     * @param string $service The name of the service which it references
     *
     * @return static
     */
    public function alias(string $alias, string $service): static;

    /**
     * Register a "decorator" for an already registered service, based
     * on either alias or actual service name.
     *
     * Note that if $service refers to an alias, the decoration process
     * will happen only when it is retrieved using the alias and not the
     * actual service name and vice versa. In the case of singleton, the
     * process happens only on the first initialization and any further
     * changes made will be persisted to the instance and could be
     * replaced by the code that uses them.
     *
     * @param string $service The service name or alias
     * @param Closure $decorator The closure that will perform the
     * decoration, that will receive the initial instance as a first
     * parameter and the current container instance as a second.
     *
     * @return static
     */
    public function extend(string $service, Closure $decorator): static;
}
