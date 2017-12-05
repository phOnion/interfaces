<?php declare(strict_types=1);
namespace Onion\Framework\Router\Interfaces;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Onion\Framework\Hydrator\Interfaces\HydratableInterface;

interface RouteInterface extends HydratableInterface
{
    public function getName(): string;
    public function getMethods(): iterable;
    public function getPattern(): string;
    public function getDelegate(): DelegateInterface;
    public function getParameters(): iterable;
}
