<?php declare(strict_types=1);
namespace Onion\Framework\Rest\Interfaces;

use Onion\Framework\Http\Header\Interfaces\AcceptInterface;

/**
 * @deprecated
 *
 * Interface defining the signature of every REST
 * serializer.
 *
 * @package Onion\Framework\Rest\Interfaces
 */
interface SerializerInterface
{
    /**
     * Should return the content type with which the
     * serialized data should be sent to the server
     *
     * @return string The content type
     */
    public function getContentType(): string;

    /**
     * Should perform a check if the current serializer is
     * supported by the client's accept header
     *
     * @param AcceptInterface $accept Instance of the header
     *
     * @return bool
     */
    public function supports(AcceptInterface $accept): bool;

    /**
     * Perform serialization of the provided $entity and
     * return the result as string, serialized by the current
     * strategy.
     *
     * @param EntityInterface $entity Entity to serialize
     * @param bool $isRoot Is the entity being transformed
     *              a root node or not
     *
     * @return string Textual representation of the $entity
     */
    public function serialize(EntityInterface $entity, bool $isRoot = false): string;
}
