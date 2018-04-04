<?php declare(strict_types=1);
namespace Onion\Framework\Router\Interfaces;

use Psr\Http\Server\RequestHandlerInterface;
use Onion\Framework\Hydrator\Interfaces\HydratableInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

interface RouteInterface extends HydratableInterface
{
    /** Get the readable name of the route */
    public function getName(): string;
    /** Get a list of the supported methods */
    public function getMethods(): iterable;
    /** Get the pattern of the route */
    public function getPattern(): string;
    public function getRequestHandler(): RequestHandlerInterface;
    public function getParameters(): iterable;

    /** Check if the route has a name */
    public function hasName(): bool;
    /** Check if a route supports a specific method */
    public function hasMethod(string $method): bool;

    /**
     * Add methods that are supported by the route
     *
     * This interface should be implemented in such a
     * way to preserve immutability
     *
     * @return self
     */
    public function withMethods(iterable $methods): self;
    /** Attach the request for the route */
    public function withRequestHandler(RequestHandlerInterface $requestHandler): self;

    /** Attempt to match the route against $path */
    public function isMatch(string $path): bool;
}
