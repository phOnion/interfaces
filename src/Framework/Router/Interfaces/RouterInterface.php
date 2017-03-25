<?php declare(strict_types=1);
namespace Onion\Framework\Router\Interfaces;

use Psr\Http\Message;

interface RouterInterface extends \Countable, \IteratorAggregate
{
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
     * @return array
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
     * @return void
     */
    public function addRoute(RouteInterface $route);
}
