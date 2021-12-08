<?php

namespace Onion\Framework\Console\Types;

enum Colors: string
{
    case NONE = "\33[0;0m";

    case BLACK = "\33[0;30m";
    case RED = "\33[0;31m";
    case GREEN = "\33[0;32m";
    case YELLOW = "\33[0;33m";
    case BLUE = "\33[0;34m";
    case PURPLE = "\33[0;35m";
    case CYAN = "\33[0;36m";
    case WHITE = "\33[0;37m";
}
