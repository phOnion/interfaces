<?php

declare(strict_types=1);

namespace Onion\Framework\Console\Interfaces;

interface ConsoleInterface
{
    public const COLOR_TERMINATOR = "\33[0m";
    public const TEXT_COLORS = [
        'none' => '',
        'white' => "\33[0;37m",
        'black' => "\33[0;30m",
        'blue' => "\33[0;34m",
        'green' => "\33[0;32m",
        'cyan' => "\33[0;36m",
        'red' => "\33[0;31m",
        'yellow' => "\33[0;33m",
        'purple' => "\33[0;35m",
        'brown' => "\33[0;33m",
        'bold-white' => "\33[1;37m",
        'bold-blue' => "\33[1;34m",
        'bold-green' => "\33[1;32m",
        'bold-cyan' => "\33[1;36m",
        'bold-red' => "\33[1;31m",
        'bold-yellow' => "\33[1;33m",
        'bold-purple' => "\33[1;35m",
        'italic-white' => "\33[3;37m",
        'italic-blue' => "\33[3;34m",
        'italic-green' => "\33[3;32m",
        'italic-cyan' => "\33[3;36m",
        'italic-red' => "\33[3;31m",
        'italic-yellow' => "\33[3;33m",
        'italic-purple' => "\33[3;35m",
        'underline-white' => "\33[4;37m",
        'underline-blue' => "\33[4;34m",
        'underline-green' => "\33[4;32m",
        'underline-cyan' => "\33[4;36m",
        'underline-red' => "\33[4;31m",
        'underline-yellow' => "\33[4;33m",
        'underline-purple' => "\33[4;35m",
        'light-blue' => "\33[0;94m",
        'light-green' => "\33[0;92m",
        'light-cyan' => "\33[0;96m",
        'light-red' => "\33[0;91m",
        'light-yellow' => "\33[0;93m",
        'light-purple' => "\33[0;95m",
        'bold-light-blue' => "\33[1;94m",
        'bold-light-green' => "\33[1;92m",
        'bold-light-cyan' => "\33[1;96m",
        'bold-light-red' => "\33[1;91m",
        'bold-light-yellow' => "\33[1;93m",
        'bold-light-purple' => "\33[1;95m",
        'italic-light-blue' => "\33[3;94m",
        'italic-light-green' => "\33[3;92m",
        'italic-light-cyan' => "\33[3;96m",
        'italic-light-red' => "\33[3;91m",
        'italic-light-yellow' => "\33[3;93m",
        'italic-light-purple' => "\33[3;95m",
        'underline-light-blue' => "\33[4;94m",
        'underline-light-green' => "\33[4;92m",
        'underline-light-cyan' => "\33[4;96m",
        'underline-light-red' => "\33[4;91m",
        'underline-light-yellow' => "\33[4;93m",
        'underline-light-purple' => "\33[4;95m",
    ];

    public const BACKGROUND_COLORS = [
        'none'  =>          '',
        'white' =>          "\33[47m",
        'black' =>          "\33[40m",
        'blue'  =>          "\33[44m",
        'green' =>          "\33[42m",
        'cyan'  =>          "\33[46m",
        'red'   =>          "\33[1;41m",
        'yellow' =>          "\33[1;43m",
        'purple' =>         "\33[45m",
        'brown' =>          "\33[43m",
    ];

    public const PROMPT_YES = 'y';
    public const PROMPT_NO  = 'n';

    public function withArgument(string $argument, mixed $value): ConsoleInterface;
    public function withoutArgument(string $argument): ConsoleInterface;
    public function hasArgument(string $argument): bool;
    public function getArgument(string $argument, mixed $default = null): mixed;
    public function getArguments(): array;

    public function block(
        string $message,
        int $width = 60
    ): int;
    public function write(string $message): int;
    public function writeLine(string $message): int;
    public function password(string $message): string;
    public function prompt(string $message, string $default = ''): string;
    public function confirm(string $message, string $default = ''): bool;
    public function choice(
        string $message,
        array $options,
        string $default = ''
    ): string;
}
