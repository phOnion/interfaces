<?php
declare(strict_types=1);
namespace Onion\Framework\Dependency\Interfaces;

interface AttachableContainer
{
    public function attach(DelegateContainerInterface $container);
}
