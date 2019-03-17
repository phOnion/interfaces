<?php declare(strict_types=1);
namespace Onion\Framework\Router\Interfaces;

use Psr\Http\Server\RequestHandlerInterface;

interface RouteInterface extends RequestHandlerInterface
{
    /** Get the readable name of the route */
    public function getName(): string;
    /** Get a list of the supported methods */
    public function getMethods(): array;
    /** Get the pattern of the route */
    public function getPattern(): string;
    public function getRequestHandler(): RequestHandlerInterface;
    public function getParameters(): array;
    public function getHeaders(): array;
    /** Retrieve a single parameter if it exists */
    public function getParameter(string $name, $default = null);

    /** Check if the route has a name */
    public function hasName(): bool;
    /** Check if a route supports a specific method */
    public function hasMethod(string $method): bool;

    /** Add methods that are supported by the route */
    public function withMethods(array $methods): self;
    /** Attach the request handler for the route */
    public function withRequestHandler(RequestHandlerInterface $requestHandler): self;
    /** Add headers to the after execution */
    public function withHeaders(array $headers): self;
    /** Add parameters to the route */
    public function withParameters(array $parameters): self;
}
