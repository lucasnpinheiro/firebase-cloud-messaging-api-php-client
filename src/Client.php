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

use Fresh\FirebaseCloudMessaging\Message\Type\MessageInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

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

    /** @var string */
    private $endpoint;

    /** @var int */
    private $messagingSenderId;

    /** @var string */
    private $serverKey;

    /** @var EventDispatcherInterface */
    private $eventDispatcher;

    /** @var Client */
    private $guzzleHTTPClient;

    /**
     * @param int    $messagingSenderId
     * @param string $serverKey
     * @param string $endpoint
     */
    public function __construct($messagingSenderId, $serverKey, $endpoint = self::DEFAULT_ENDPOINT)
    {
        $this->messagingSenderId = $messagingSenderId;
        $this->serverKey = $serverKey;
        $this->endpoint = $endpoint;

//        $this->guzzleHTTPClient = new Client([
//            'base_uri' => rtrim($this->host, '/'),
//        ]);
    }

    public function setEventDispatcher(EventDispatcherInterface $eventDispatcher = null)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    public function sendMessage(MessageInterface $message)
    {
//        $response = $this->guzzleHTTPClient->post($uri, $body);
//        $message->build();
    }
}
