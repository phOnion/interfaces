<?php
declare(strict_types=1);

namespace Onion\Framework\Loop\Types;

enum Lock
{
    case SHARED;
    case EXCLUSIVE;
}
