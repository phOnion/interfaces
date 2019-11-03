<?php declare(strict_types=1);
namespace Onion\Framework\Router\Interfaces;

use Psr\Http\Server\RequestHandlerInterface;

interface RouteInterface extends RequestHandlerInterface
{
    public function getName(): string;
    public function getMethods(): array;
    public function getPattern(): string;
    public function getRequestHandler(): RequestHandlerInterface;
    public function getParameters(): array;
    public function getHeaders(): array;
    public function getParameter(string $name, $default = null);

    public function hasName(): bool;
    public function hasMethod(string $method): bool;

    public function withMethods(array $methods): self;
    public function withRequestHandler(RequestHandlerInterface $requestHandler): self;
    public function withHeaders(array $headers): self;
    public function withParameters(array $parameters): self;
    public function withPreload(string $uri, array $params): self;
}
