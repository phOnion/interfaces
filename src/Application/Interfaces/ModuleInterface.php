<?php

declare(strict_types=1);

namespace Onion\Framework\Application\Interfaces;

use Onion\Framework\Dependency\Interfaces\FactoryInterface;
use Psr\Container\ContainerInterface as Container;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * Special-case interface indicating the the factory is
 * intended to return an Application instance.
 */
interface ModuleInterface extends FactoryInterface
{
    /**
     * The factory method which *knows* how to construct
     * the application instance
     */
    public function build(Container $container): RequestHandlerInterface;
}
