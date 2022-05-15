<?php

declare(strict_types=1);

namespace Onion\Framework\Dependency\Interfaces;

use Onion\Framework\Dependency\Interfaces\ContainerInterface;

interface ServiceProviderInterface
{
    public function register(ContainerInterface $provider): void;
}
