<?php declare(strict_types=1);
namespace Onion\Framework\Http\Header\Interfaces;

interface HeaderInterface
{
    public function __construct(string $headerLine);
}
