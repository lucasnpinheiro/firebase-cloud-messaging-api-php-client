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

use Fresh\FirebaseCloudMessaging\Event\FirebaseEvents;
use Fresh\FirebaseCloudMessaging\Event\MulticastMessageResponseEvent;
use Fresh\FirebaseCloudMessaging\Message\Builder\MessageBuilder;
use Fresh\FirebaseCloudMessaging\Message\Type\AbstractMessage;
use Fresh\FirebaseCloudMessaging\Response\FirebaseResponseInterface;
use Fresh\FirebaseCloudMessaging\Response\MulticastMessageResponse;
use Fresh\FirebaseCloudMessaging\Response\ResponseProcessor;
use GuzzleHttp\Client as GuzzleClient;

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

    /** @var ResponseProcessor */
    private $responseProcessor;

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

        $this->messageBuilder = new MessageBuilder();
        $this->responseProcessor = new ResponseProcessor();

        $this->guzzleHTTPClient = new GuzzleClient([
            'base_uri' => rtrim($this->endpoint, '/'),
            'timeout' => $guzzleTimeOut,
            'http_errors' => false,
            'headers' => [
                'Authorization' => sprintf('key=%s', $this->serverKey),
                'Content-Type' => 'application/json',
            ],
        ]);
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
     *
     * @return FirebaseResponseInterface
     */
    public function sendMessage(AbstractMessage $message)
    {
        $this->messageBuilder->setMessage($message);

        $response = $this->guzzleHTTPClient->post(
            '',
            ['body' => $this->messageBuilder->getMessageAsJson()]
        );

        $processedResponse = $this->responseProcessor->processResponse($message, $response);
        $this->dispatchEvent($message, $processedResponse);

        return $processedResponse;
    }

    /**
     * @param AbstractMessage           $message
     * @param FirebaseResponseInterface $response
     */
    private function dispatchEvent(AbstractMessage $message, FirebaseResponseInterface $response)
    {
        if ($this->allowedToDispatchEvents()) {
            if ($response instanceof MulticastMessageResponse) {
                $this->eventDispatcher->dispatch(
                    FirebaseEvents::MULTICAST_MESSAGE_RESPONSE_EVENT,
                    new MulticastMessageResponseEvent(
                        $response->getMulticastId(),
                        $response->getNumberOfSuccessMessages(),
                        $response->getNumberOfFailedMessages(),
                        $response->getNumberOfMessagesWithCanonicalRegistrationToken()
                    )
                );
            }
        }
    }

    /**
     * @return bool
     */
    private function allowedToDispatchEvents()
    {
        return $this->eventDispatcher instanceof EventDispatcherInterface;
    }
}
