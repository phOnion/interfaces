<?php

declare(strict_types=1);

namespace Onion\Framework\Console\Types;

enum Decorations: string
{
case NONE = 'none';
case BOLD = 'bold';
case ITALIC = 'italic';
case UNDERLINE = 'underline';
case STRIKE = 'strike';
case BACKGROUND = 'background';
    }
