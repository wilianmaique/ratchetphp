<?php

namespace Ratchet;

/**
 * The version of Ratchet being used
 * @var string
 */
const VERSION = 'Ratchet/1.0.3';

/**
 * A proxy object representing a connection to the application
 * This acts as a container to store data (in memory) about the connection
 */
interface ConnectionInterface
{
    /**
     * Send data to the connection
     * @param  string $data
     * @return \Ratchet\ConnectionInterface
     */
    public function send($data);

    /**
     * Close the connection
     */
    public function close();
}
