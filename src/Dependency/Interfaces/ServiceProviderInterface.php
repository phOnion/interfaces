<?php

declare(strict_types=1);

namespace Onion\Framework\Dependency\Interfaces;

use Onion\Framework\Dependency\Interfaces\ContainerInterface;

interface ServiceProviderInterface
{
    /**
     * Facilitates the registration of dependencies with the container
     * with which the provider is registered.
     *
     * @param ContainerInterface $provider With which the
     * @return void
     */
    public function register(ContainerInterface $provider): void;
}
