<?php

declare(strict_types=1);

namespace Onion\Framework\State\Interfaces;

interface RepeatableFlowInterface extends FlowInterface
{
    public function reply(object $target): void;
}
