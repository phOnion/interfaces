<?php

declare(strict_types=1);

namespace Onion\Framework\Loop\Types;

/**
 * Represents the possible operations on a resource stream
 */
enum Operation
{
case READ;
case WRITE;
    }
