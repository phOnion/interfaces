<?php

declare(strict_types=1);

namespace Onion\Framework\Rest\Interfaces;

interface TransformableInterface
{
    public function transform(iterable $includes = [], iterable $fields = []): EntityInterface;
}
