<?php
declare(strict_types=1);

namespace Onion\Framework\Loop\Types;

enum LockType
{
    case SHARED;
    case EXCLUSIVE;
}
