<?php

namespace Onion\Framework\Loop\Interfaces;

use Onion\Framework\Loop\Types\Operation;

interface AsyncResourceInterface extends ResourceInterface
{
    public function block(): bool;
    public function unblock(): bool;

    public function wait(Operation $operation = Operation::READ);
}
