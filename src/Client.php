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
use Fresh\FirebaseCloudMessaging\Message\Type\AbstractMessage;
use GuzzleHttp\Client as GuzzleClient;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Client.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class Client
{
    const DEFAULT_ENDPOINT = 'https://fcm.googleapis.com/fcm/send';
    const DEFAULT_GUZZLE_TIMEOUT = 50;

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

    /** @var MessageBuilder */
    private $messageBuilder;

    /**
     * @param int    $messagingSenderId
     * @param string $serverKey
     * @param string $endpoint
     * @param int    $guzzleTimeOut
     */
    public function __construct(
        $messagingSenderId,
        $serverKey,
        $endpoint = self::DEFAULT_ENDPOINT,
        $guzzleTimeOut = self::DEFAULT_GUZZLE_TIMEOUT
    ) {
        $this->messagingSenderId = $messagingSenderId;
        $this->serverKey = $serverKey;
        $this->endpoint = $endpoint;

        $this->guzzleHTTPClient = new GuzzleClient([
            'base_uri' => rtrim($this->endpoint, '/'),
            'timeout' => $guzzleTimeOut,
        ]);
        $this->messageBuilder = new MessageBuilder();
    }

    /**
     * @param EventDispatcherInterface|null $eventDispatcher
     */
    public function setEventDispatcher(EventDispatcherInterface $eventDispatcher = null)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * @param AbstractMessage $message
     */
    public function sendMessage(AbstractMessage $message)
    {
        $this->messageBuilder->setMessage($message);

        $response = $this->guzzleHTTPClient->post(
            '',
            [
                'headers' => [
                    'Authorization' => sprintf('key=%s', $this->serverKey),
                    'Content-Type' => 'application/json',
                ],
                'body' => $this->messageBuilder->getMessageAsJson(),
            ]
        );
        // @todo Finish
    }
}
