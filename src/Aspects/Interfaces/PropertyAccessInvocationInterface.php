<?php

declare(strict_types=1);

namespace Onion\Framework\Aspects\Interfaces;

interface PropertyAccessInvocationInterface extends InvocationInterface
{
    public const ACCESS_SET = 'set';
    public const ACCESS_GET = 'get';
    public const ACCESS_UNSET = 'unset';
    public const ACCESS_ISSET = 'isset';

    public function getPropertyName(): string;
    public function getOperation(): string;

    public function getCurrentValue();
    public function getNewValue();
}
