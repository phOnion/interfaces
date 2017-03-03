<?php declare(strict_types=1);
namespace Onion\Framework\Rest\Interfaces;

use Onion\Framework\Hydrator\Interfaces\HydratableInterface as Hydratable;
use Onion\Framework\Rest\Interfaces\EntityInterface as Entity;

/**
 * The object which should is responsible for turning
 * any hydratable object in to an entity ready to be
 * serialized and returned to the requesting client
 *
 * @package Onion\Framework\Rest\Interfaces
 */
interface TransformerInterface
{
    /**
     * Transforms the provided object in to an entity that
     * can be serialized. Also provides support for passing
     * filtering criteria as to which type of entities to
     * include, and which fields of the included entities to
     * return.
     *
     * @param Hydratable $hydratable Entity to hydrate
     * @param array $includes Types of entities to include
     * @param array $fields assoc array with name of included resource and list of fields to include
     *
     * @return EntityInterface An entity interface representing the object
     */
    public function transform(Hydratable $hydratable, array $includes = [], array $fields = []): Entity;
}