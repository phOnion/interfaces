<?php declare(strict_types=1);
namespace Onion\Framework\Application\Interfaces;

use Psr\Http\Message\ServerRequestInterface;

interface ApplicationInterface
{
    public function run(ServerRequestInterface $request): void;
}
