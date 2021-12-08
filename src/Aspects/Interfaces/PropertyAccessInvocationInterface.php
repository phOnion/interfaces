<?php

declare(strict_types=1);

namespace Onion\Framework\Aspects\Interfaces;

use Onion\Framework\Aspects\Types\PropertyAccess;

interface PropertyAccessInvocationInterface extends InvocationInterface
{
    public function getPropertyName(): string;
    public function getOperation(): PropertyAccess;

    public function getCurrentValue();
    public function getNewValue();
}
