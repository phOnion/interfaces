<?php declare(strict_types=1);
namespace Onion\Framework\Router\Interfaces;

use Onion\Framework\Hydrator\Interfaces\HydratableInterface;
use Psr\Http\Server\RequestHandlerInterface;

interface RouteInterface extends HydratableInterface
{
    /** Get the readable name of the route */
    public function getName(): string;
    /** Get a list of the supported methods */
    public function getMethods(): iterable;
    /** Get the pattern of the route */
    public function getPattern(): string;
    /** Get the request handler of the route middleware */
    public function getRequestHandler(): RequestHandlerInterface;
    /** Get the route parameters(if any) */
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
