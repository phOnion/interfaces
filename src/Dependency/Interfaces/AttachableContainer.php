<?php

declare(strict_types=1);

namespace Onion\Framework\Dependency\Interfaces;

use Onion\Framework\Dependency\Interfaces\DelegateContainerInterface;
use Psr\Container\ContainerInterface;

interface AttachableContainer extends ContainerInterface
{
    public function attach(DelegateContainerInterface $container): void;
}
