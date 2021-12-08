<?php

namespace Onion\Framework\Loop\Interfaces;

use Onion\Framework\Loop\Coroutine;
use Onion\Framework\Loop\Interfaces\ResourceInterface;

interface SchedulerInterface
{
    public function add(CoroutineInterface $coroutine): TaskInterface;
    public function schedule(TaskInterface $task): void;

    public function onRead(ResourceInterface $resource, TaskInterface $task): void;
    public function onWrite(ResourceInterface $resource, TaskInterface $task): void;
    public function onError(ResourceInterface $resource, TaskInterface $task): void;

    public function start(): void;
}
