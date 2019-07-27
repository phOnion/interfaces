<?php
declare(strict_types=1);
namespace Onion\Framework\Dependency\Interfaces;

use Onion\Framework\Dependency\Interfaces\DelegateContainerInterface;

interface AttachableContainer
{
    public function attach(DelegateContainerInterface $container): void;
}
