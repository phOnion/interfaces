<?php

declare(strict_types=1);

namespace Onion\Framework\Loop\Interfaces;

use Onion\Framework\Loop\Types\Operation;

/**
 * Represents a resource as an object, exposing some common methods
 * to interact with it
 */
interface ResourceInterface
{
    /**
     * Attempt to read data from the underlying resource
     *
     * @param int $size Maximum amount of bytes to read
     * @return string|false A string containing the data read or false
     * if reading failed
     */
    public function read(int $size): string | false;

    /**
     * Attempt to write data to the underlying resource
     *
     * @param string $data The data to be written
     * @return int|false The amount of bytes written or false on error
     */
    public function write(string $data): int | false;

    /**
     * Close the underlying resource
     *
     * @return bool Whether the operation succeeded or not
     */
    public function close(): bool;

    /**
     * Attempt to make operations on the underlying resource blocking
     *
     * @return bool Whether the operation succeeded or not
     */
    public function block(): bool;

    /**
     * Attempt to make operations on the underlying resource non-blocking
     *
     * @return bool Whether the operation succeeded or not
     */
    public function unblock(): bool;

    /**
     * Returns the underlying resource
     *
     * @return resource
     */
    public function getResource();

    /**
     * Retrieve the numeric identifier of the underlying resource
     *
     * @return int
     */
    public function getResourceId(): int;

    /**
     * Check whether the resource is still alive or not
     * @return bool
     */
    public function eof(): bool;

    /**
     * Detaches the underlying resource from the current object and
     * returns it, making the current object obsolete
     *
     * @return resource
     */
    public function detach(): mixed;
}
