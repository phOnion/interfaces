<?php

declare(strict_types=1);

namespace Onion\Framework\Dependency\Interfaces;

use Psr\Container\ContainerInterface;

interface DelegateContainerInterface extends ContainerInterface
{
    public function attach(AttachableContainer $container): void;
}
