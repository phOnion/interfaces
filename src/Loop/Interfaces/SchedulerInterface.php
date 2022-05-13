<?php

declare(strict_types=1);

namespace Onion\Framework\Loop\Interfaces;

use Onion\Framework\Loop\Interfaces\ResourceInterface;

/**
 * Represents an event loop
 */
interface SchedulerInterface
{
    /**
     * Add a coroutine to the task queue
     *
     * @param CoroutineInterface $coroutine
     * @return TaskInterface
     */
    public function add(CoroutineInterface $coroutine): TaskInterface;

    /**
     * Schedule a task for execution either during at the earliest tick
     * or at a given time if the $at parameter is provided.
     *
     * @param TaskInterface $task The task to put on the queue
     * @param int|null $at Time at which to execute the given task (in
     * microseconds)
     *
     * @return void
     */
    public function schedule(TaskInterface $task, int $at = null): void;

    /**
     * Schedules a task to be executed as soon as there is any data
     * available to read from the given $resource.
     *
     * @param ResourceInterface $resource The resource to await
     * @param TaskInterface $task The task to execute when data is available
     * @return void
     */
    public function onRead(ResourceInterface $resource, TaskInterface $task): void;

    /**
     * Schedules a task to be executed as soon as the $resource is ready
     * to receive data
     *
     * @param ResourceInterface $resource The resource to await
     * @param TaskInterface $task  The task to execute when data can be
     * transmitted
     *
     * @return void
     */
    public function onWrite(ResourceInterface $resource, TaskInterface $task): void;

    /**
     * Starts the event loop execution cycle. All code written after
     * a call to this method will be executed as soon as there are no
     * scheduled tasks, timers and watched resources
     *
     * @return void
     */
    public function start(): void;
}
