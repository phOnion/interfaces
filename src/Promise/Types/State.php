<?php

declare(strict_types=1);

namespace Onion\Framework\Promise\Types;

/**
 * Represents internal promise stats
 */
enum State
{
case PENDING;
case REJECTED;
case FULFILLED;
case CANCELLED;
    }
