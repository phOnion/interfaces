<?php

namespace Onion\Framework\Loop\Types;

enum Operation
{
    case READ;
    case WRITE;
    case ERROR;
}
