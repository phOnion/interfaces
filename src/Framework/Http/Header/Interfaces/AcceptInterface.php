<?php declare(strict_types=1);
namespace Onion\Framework\Http\Header\Interfaces;

interface AcceptInterface extends HeaderInterface
{
    public function supports(string $value): bool;
    public function getPriority(string $value): float;
}
