<?php

declare(strict_types=1);

namespace Onion\Framework\Console\Interfaces;

use Onion\Framework\Console\Types\Confirmation;

interface ConsoleInterface
{
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
    public function confirm(string $message, ?Confirmation $default = null): bool;
    public function choice(
        string $message,
        array $options,
        string $default = ''
    ): string;

    public function overwrite(string $content = ''): void;
    public function showCursor(): void;
    public function hideCursor(): void;
}
