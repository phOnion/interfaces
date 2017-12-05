<?php declare(strict_types=1);
namespace Onion\Framework\Rest\Interfaces;

use Psr\Link\EvolvableLinkProviderInterface;

/**
 * Interface representing a transformed object in to
 * a usable entity which is to be used by a serializer
 * in order to produce a given type of output
 *
 * @package Onion\Framework\Rest\Interfaces
 *
 */
interface EntityInterface extends EvolvableLinkProviderInterface
{
    /**
     * Returns the rel/type of the entity
     * @return string
     */
    public function getRel(): string;

    /**
     * Allowing to use a "meta" object that is handled
     * differently in order to represent errors
     *
     * @return bool
     */
    public function isError(): bool;

    /**
     * Should be used in such a way that it overwrites all
     * previously set meta-data with the provided one. Must
     * be implemented in a way that preserves object immutability.
     *
     * @param iterable $data The data to set
     * @return EntityInterface New immutable instance
     */
    public function withMetaData(iterable $data): EntityInterface;

    /**
     * Should be used in such a way that it will not replace
     * the currently set meta-data, but behavior on conflict
     * is up to the implementation (overwrite, exception, etc).
     *
     * Must be implemented in such a way that preserves immutability.
     *
     * @param iterable $data The data to add
     *
     * @return EntityInterface New immutable instance
     */
    public function withAddedMetaData(iterable $data): EntityInterface;

    /**
     * A simple getter to provide access to the meta-data
     *
     * @return iterable All available meta-data for the object
     */
    public function getMetaData(): iterable;

    /**
     * Add a new item to the entity data
     *
     * @param string $identifier Identifier of for the value
     * @param mixed $value the value
     *
     * @return EntityInterface New immutable instance
     */
    public function withDataItem(string $identifier, $value): EntityInterface;

    /**
     * Remove a single item from the entity data
     *
     * @param string $identifier Identifier to remove
     *
     * @return EntityInterface New immutable instance
     */
    public function withoutDataItem(string $identifier): EntityInterface;

    /**
     * Retrieve a single data item from the entity, if it
     * is not present return whatever is set in default
     *
     * @param string $identifier Identifier to look for
     * @param mixed $default Fallback return value
     *
     * @return string|mixed Result of the search
     */
    public function getDataItem(string $identifier, $default = null);

    /**
     * Set new data to the current entity
     *
     * @param iterable $data The data to add
     *
     * @return EntityInterface New immutable instance
     */
    public function withData(iterable $data): EntityInterface;

    /**
     * Clears any data attached to the entity
     *
     * @return EntityInterface New immutable instance
     */
    public function withoutData(): EntityInterface;

    /**
     * Retrieve all data available in the entity
     *
     * @return iterable
     */
    public function getData(): iterable;

    /**
     * Attach new child item with type to the current entity,
     * note that $type and the result of $entity->getRel()
     * should not necessarily be the same. It might make sense
     * in some contexts, but in others - like JSON-LD or JSON-API
     * they convey a meaning, since in json-ld it $type will
     * represent the field to which the child should be assigned,
     * but $entity->getRel() will provide the type of the child.
     *
     * @param string $type Type of the relation/field name
     * @param EntityInterface $entity The entity to be attached
     * @param bool $collection If the current entity is a collection or not
     *
     * @return EntityInterface New immutable instance
     */
    public function addEmbedded(string $type, EntityInterface $entity, bool $collection = true): EntityInterface;

    /**
     * Returns all attached child entities in an iterable like:
     * ```
     * [
     *     'relation' => [
     *         EntityInterface,
     *         EntityInterface,
     *         EntityInterface
     *          // ..
     *     ]
     * ]
     * ```
     * or if the relation contains only one entity
     * ```
     * [
     *     'relation' => EntityInterface,
     *     // ...
     * ]
     * ```
     * @return EntityInterface[][]|EntityInterface[]
     */
    public function getEmbedded(): iterable;
}
