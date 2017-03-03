<?php declare(strict_types=1);
namespace Onion\Framework\Application\Interfaces;

use Onion\Framework\Dependency\Interfaces\FactoryInterface;
use Psr\Container\ContainerInterface as Container;

/**
 * Special-case interface indicating the the factory is
 * intended to return an Application instance.
 */
interface ModuleInterface extends FactoryInterface
{
    /**
     * The factory method which *knows* how to construct
     * the application instance
     *
     * @param Container $container The main application dependency container
     *
     * @return ApplicationInterface
     */
    public function build(Container $container): ApplicationInterface;
}
