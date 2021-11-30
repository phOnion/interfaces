<?php

declare(strict_types=1);

namespace Onion\Framework\Collection\Interfaces;

use ArrayAccess;
use Countable;

interface CollectionInterface extends \Iterator, ArrayAccess, Countable
{
    public const USE_VALUES_ONLY = 1;
    public const USE_KEYS_ONLY = 2;
    public const USE_BOTH = self::USE_KEYS_ONLY | self::USE_VALUES_ONLY;

    public const PAD_LEFT = 3;
    public const PAD_RIGHT = 4;

    public function map(callable $callback): static;
    public function filter(callable $callback): static;
    public function sort(callable $callback, string $sortFunction = "usort"): static;
    public function reduce(callable $callback, mixed $initial = null): static;
    public function slice(int $offset, int $limit = -1): static;
    public function find(mixed $item): mixed;
    public function current(): mixed;
    public function key(): mixed;
    public function next(): void;
    public function rewind(): void;
    public function valid(): bool;
    public function count(): int;
    public function keys(): static;
    public function values(): static;
    public function each(callable $callback): void;
    public function implode(string $separator);
    public function append(iterable $items): static;
    public function prepend(iterable $items);
    public function remove(mixed $item): static;
    public function unique(): static;
    public function contains(mixed $item): bool;
    public function intersect(iterable ...$elements);
    public function diff(iterable ...$elements);
    public function combine(iterable $values, int $mode = self::USE_VALUES_ONLY);
    public function pad(int $length, mixed $padding, int $direction = self::PAD_RIGHT);
    public function reverse(): static;
    public function flip(): static;
    public function validate(callable $callback): bool;
    public function when(callable $expression, callable $callback): static;
    public function group(callable $grouping): static;
    public function join(iterable ...$iterables): static;
    public function serialize(callable|string $fn = "serialize"): static;
    public function unserialize(callable|string $fn = 'unserialize'): static;
    public function raw(): array;
}
