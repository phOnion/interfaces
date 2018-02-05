<?php declare(strict_types=1);
namespace Onion\Framework\Http\Header\Interfaces;

interface HeaderInterface
{
    public function getName(): string;
    public function getRawValue(): string;

    public function __toString(): string;
}
