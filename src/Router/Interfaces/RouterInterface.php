<?php

declare(strict_types=1);

namespace Onion\Framework\Router\Interfaces;

use Psr\Http\Message\RequestInterface;

interface RouterInterface
{
    public function match(RequestInterface $request): mixed;
}
