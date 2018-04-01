<?php declare(strict_types=1);
namespace Onion\Framework\Router\Interfaces;

use Psr\Http\Server\RequestHandlerInterface;
use Onion\Framework\Hydrator\Interfaces\HydratableInterface;

interface RouteInterface extends HydratableInterface
{
    public function getName(): string;
    public function getMethods(): iterable;
    public function getPattern(): string;
    public function getDelegate(): RequestHandlerInterface;
    public function getParameters(): iterable;
}
