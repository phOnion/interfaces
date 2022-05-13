<?php

declare(strict_types=1);

namespace Onion\Framework\Loop\Interfaces;

use Onion\Framework\Loop\Coroutine;
use Onion\Framework\Loop\Interfaces\ResourceInterface;

interface SchedulerInterface
{
    public function add(CoroutineInterface $coroutine): TaskInterface;
    public function schedule(TaskInterface $task, int $at = null): void;

    public function onRead(ResourceInterface $resource, TaskInterface $task): void;
    public function onWrite(ResourceInterface $resource, TaskInterface $task): void;

    public function start(): void;
}
