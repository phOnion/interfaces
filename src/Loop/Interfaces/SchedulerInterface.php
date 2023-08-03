<?php

declare(strict_types=1);

namespace Onion\Framework\Loop\Interfaces;

use Onion\Framework\Client\Interfaces\ContextInterface as ClientContext;
use Onion\Framework\Loop\Types\NetworkAddress;
use Onion\Framework\Server\Interfaces\ContextInterface as ServerContext;
use Onion\Framework\Loop\Interfaces\ResourceInterface;
use Onion\Framework\Loop\Types\NetworkProtocol;

/**
 * Represents an event loop
 */
interface SchedulerInterface
{
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
     * Registers a signal handler for the given $signal. The handler
     * is added as part of the loop and in cases where the signal is
     * a termination signal, the loop must be stopped from the handler
     * itself, by using `stop()`.
     *
     * @param int $signal The signal to listen for
     * @param TaskInterface $task The task to execute when the signal is
     * received.
     *
     * @return void
     */
    public function signal(int $signal, TaskInterface $task): void;

    /**
     * Starts the event loop execution cycle. All code written after
     * a call to this method will be executed as soon as there are no
     * scheduled tasks, timers and watched resources
     *
     * @return void
     */
    public function start(): void;

    /**
     * Stops the event loop after completing the current tick
     */
    public function stop(): void;

    /**
     * Adds a new error handler to the loop. The handler will be
     * executed when an error occurs during the execution of the loop
     * and the error is not handled by the task itself.
     */
    public function addErrorHandler(Closure $handler): void;

    /**
     * Removes a previously added error handler from the loop.
     */
    public function removeErrorHandler(Closure $handler): void;

    /**
     * Open a $type server on the given $address and optionally $port
     * using the given $protocol. The $callback will be executed when
     * a new connection is established and the $context is used to
     * configure the server.
     *
     * In the case where the $type is `NetworkAddress::LOCAL`, the
     * $address parameter is used as the path to the socket to listen
     * on and $port is ignored.
     *
     * @return string The address on which the server is listening
     */
    public function open(
        string $address,
        int $port,
        Closure $callback,
        NetworkProtocol $protocol = NetworkProtocols::TCP,
        ?ServerContext $context = null,
        NetworkAddress $type = NetworkAddress::NETWORK,
    ): string;

    /**
     * Establish a $type connection to a designated $address and optionally $port
     * using the given $protocol. The $callback will be executed when the connection
     * is established and the $context is used to configure the connection.
     *
     * In the case where the $type is `NetworkAddress::LOCAL`, the $address parameter
     * is used as the path to the socket to connect to and $port is ignored.
     */
    public function connect(
        string $address,
        int $port,
        Closure $callback,
        NetworkProtocol $protocol = NetworkProtocols::TCP,
        ?ClientContext $context = null,
        NetworkAddress $type = NetworkAddress::NETWORK,
    ): void;


}
