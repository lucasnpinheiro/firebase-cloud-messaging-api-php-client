<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging;

use Fresh\FirebaseCloudMessaging\Message\Builder\MessageBuilder;
use Fresh\FirebaseCloudMessaging\Response\ResponseProcessor;

/**
 * ClientFactory.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
final class ClientFactory
{
    /** @var string */
    private $serverKey;

    /** @var string */
    private $endpoint;

    /** @var int */
    private $timeout;

    /**
     * @param string $serverKey
     * @param string $endpoint
     * @param int    $timeout
     */
    public function __construct($serverKey, $endpoint, $timeout)
    {
        $this->serverKey = $serverKey;
        $this->endpoint = $endpoint;
        $this->timeout = $timeout;
    }

    /**
     * @return Client
     */
    public function createClient()
    {
        $httpClient = new HttpClient($this->serverKey, $this->endpoint, $this->timeout);
        $messageBuilder = new MessageBuilder();
        $responseProcessor = new ResponseProcessor();

        return new Client($httpClient, $messageBuilder, $responseProcessor);
    }
}
