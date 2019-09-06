<?php declare(strict_types=1);
namespace Onion\Framework\Hydrator\Interfaces;

/**
 * An interface representing the methods provided by the hydration
 * traits, that allow hydration and dehydration of the current object.
 *
 * Note that all (de)hydration is performed only on public methods/properties
 *
 * @package Onion\Framework\Hydrator\Interfaces
 */
interface HydratableInterface
{
    public const USE_SNAKE_CASE = 1;
    public const USE_RAW_KEYS = 2;
    public const EXTRACT_ALT_GETTERS = 4;
    public const EXCLUDE_EMPTY = 1024;
    public const PRESERVE_CASE = 2048;

    /**
     * Populates the current object with the provided data, according to
     * the used strategy
     *
     * @param array $data Data used to populate the object
     *
     * @return HydratableInterface|self A cloned, populated instance of the current object
     */
    public function hydrate(array $data): HydratableInterface;

    /**
     * Extract data from the current object. If $keys is provided
     * it will retrieve only those keys, otherwise all "public"
     * data will be extracted from the object.
     *
     * @param array $keys (Optional) List of specific keys to extract
     *
     * @return iterable The extracted data
     */
    public function extract(array $keys = []): iterable;
}
