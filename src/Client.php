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

/**
 * Client.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class Client
{
    /** @var EventDispatcherInterface */
    private $eventDispatcher;

    /** @var Client */
    private $httpClient;

    /** @var MessageBuilder */
    private $messageBuilder;

    /** @var ResponseProcessor */
    private $responseProcessor;

    /** @var bool */
    private $allowedToDispatchEvents = false;

    /**
     * @param HttpClient        $httpClient
     * @param MessageBuilder    $messageBuilder
     * @param ResponseProcessor $responseProcessor
     */
    public function __construct(
        HttpClient $httpClient,
        MessageBuilder $messageBuilder,
        ResponseProcessor $responseProcessor
    ) {
        $this->messageBuilder = $messageBuilder;
        $this->responseProcessor = $responseProcessor;
        $this->httpClient = $httpClient;
    }

    /**
     * @param EventDispatcherInterface|null $eventDispatcher
     */
    public function setEventDispatcher(EventDispatcherInterface $eventDispatcher = null)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * @param bool $allowedToDispatchEvents
     */
    public function setAllowedToDispatchEvents($allowedToDispatchEvents)
    {
        $this->allowedToDispatchEvents = $allowedToDispatchEvents;
    }

    /**
     * @param AbstractMessage $message
     *
     * @return FirebaseResponseInterface
     */
    public function sendMessage(AbstractMessage $message)
    {
        $this->messageBuilder->setMessage($message);

        $response = $this->httpClient->post(
            '',
            ['body' => $this->messageBuilder->getMessageAsJson()]
        );

        $processedResponse = $this->responseProcessor->processResponse($message, $response);
        $this->dispatchEvent($processedResponse);

        return $processedResponse;
    }

    /**
     * @param FirebaseResponseInterface $response
     */
    private function dispatchEvent(FirebaseResponseInterface $response)
    {
        if ($this->allowedToDispatchEvents()) {
            if ($response instanceof MulticastMessageResponse) {
                $this->eventDispatcher->dispatch(
                    FirebaseEvents::MULTICAST_MESSAGE_RESPONSE_EVENT,
                    new MulticastMessageResponseEvent(
                        $response->getMulticastId(),
                        $response->getSuccessfulMessageResults(),
                        $response->getFailedMessageResults(),
                        $response->getCanonicalTokenMessageResults()
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
        return $this->eventDispatcher instanceof EventDispatcherInterface && $this->allowedToDispatchEvents;
    }
}
