<?php declare(strict_types=1);
namespace Onion\Framework\Router\Interfaces;

use Psr\Http\Message;

interface RouterInterface extends \Countable, \IteratorAggregate
{
    const SUPPORTED_METHODS = [
        'CONNECT',
        'DELETE',
        'GET',
        'HEAD',
        'OPTIONS',
        'PATCH',
        'POST',
        'PUT',
        // 'TRACE', // Ignored due to possible security issues
    ];

    /**
     *
     * @api
     *
     * @param string               $method The HTTP method of the current request
     * @param Message\UriInterface $uri    Representation of the current URI
     *
     * @throws Exception\NotFoundException when no route that matches the
     * pattern is found
     * @throws Exception\NotAllowedException When the matched route does not
     * support the current request method.
     *
     * @return RouteInterface
     */
    public function match(string $method, Message\UriInterface $uri): RouteInterface;

    /**
     * Push a route in to the stack routes on which to perform the actual
     * matches against.
     *
     * @api
     *
     * @param RouteInterface $route
     *
     * @return self
     */
    public function addRoute(RouteInterface $route): RouterInterface;
}
