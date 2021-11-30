<?php

declare(strict_types=1);

namespace Onion\Framework\Router\Interfaces\Exception;

/**
 * Class NotAllowedException
 * Exception to indicate that a route with pattern that matches the requested
 * one exists, but does not indicate that it supports the currently requested
 * method.
 *
 * @package Onion\Framework\Interfaces\Router\Exception
 */
interface NotAllowedException extends \Throwable
{
    /**
     * Sets the methods that ARE supported by the method
     *
     * @param iterable $methods
     *
     * @return void
     */
    public function setAllowedMethods(iterable $methods): void;
    /**
     * Returns the list of methods supported by the route
     *
     * @return iterable
     */
    public function getAllowedMethods(): iterable;
}
