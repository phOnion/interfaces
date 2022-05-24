<?php

declare(strict_types=1);

namespace Onion\Framework\Dependency\Interfaces;

use Onion\Framework\Dependency\Interfaces\ServiceProviderInterface;
use Onion\Framework\Dependency\Interfaces\ContainerInterface;

interface BootableServiceProviderInterface extends ServiceProviderInterface
{
    /**
     * Handles late initializations of the service providers, that get
     * triggered after all service providers' dependencies have been
     * registered
     */
    public function boot(ContainerInterface $container): void;
}
