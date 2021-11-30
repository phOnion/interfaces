<?php

namespace Onion\Framework\Config\Interfaces;

interface LoaderInterface
{
    public function loadFile(string $filename): array;
    public function loadDirectory(string $environment, string $directory): array;
    public function loadDirectories(string $environment, array $directories): array;
}
