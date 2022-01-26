<?php

declare(strict_types=1);

namespace Onion\Framework\Aspects\Types;

enum PropertyAccess: string
{
case GET = 'get';
case SET = 'set';
case unset = 'unset';
case isset = 'isset';
    }
