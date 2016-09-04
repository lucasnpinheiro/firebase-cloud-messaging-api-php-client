<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\Fcm;

use Fresh\Fcm\Message\Type\MessageInterface;
//use GuzzleHttp\Client;
//use GuzzleHttp\Exception\ClientException;
//use GuzzleHttp\Exception\GuzzleException;

/**
 * Client.
 *
 * @see https://firebase.google.com/docs/cloud-messaging/
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class Client
{
    const DEFAULT_ENDPOINT = 'https://fcm.googleapis.com/fcm/send';

    /**
     * @var string $endpoint Endpoint
     */
    private $endpoint;

    /**
     * @var int $senderId Sender ID
     */
    private $senderId;

    /**
     * @var string $serverKey Server key
     */
    private $serverKey;

    /**
     * @var Client $guzzleHTTPClient Guzzle HTTP client
     */
    private $guzzleHTTPClient;

    /**
     * Constructor.
     *
     * @param int    $senderId  Sender Id
     * @param string $serverKey Server key
     * @param string $endpoint  Endpoint
     */
    public function __construct(int $senderId, string $serverKey, string $endpoint = self::DEFAULT_ENDPOINT)
    {
        $this->senderId  = $senderId;
        $this->serverKey = $serverKey;
        $this->endpoint  = $endpoint;

//        $this->guzzleHTTPClient = new Client([
//            'base_uri' => rtrim($this->host, '/'),
//        ]);
    }

    public function sendMessage(MessageInterface $message)
    {
        $response = $this->guzzleHTTPClient->post($uri, $body);
        $message->build();
    }
}
