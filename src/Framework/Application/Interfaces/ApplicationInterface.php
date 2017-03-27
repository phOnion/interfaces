<?php declare(strict_types=1);
namespace Onion\Framework\Application\Interfaces;

use Interop\Http\ServerMiddleware\DelegateInterface;

/**
 * A special-case interface allowing to distinguish
 * between normal middleware and an application
 * instance
 */
interface ApplicationInterface extends DelegateInterface
{

}
