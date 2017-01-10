<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 * MulticastMessageResponseEvent.
 *
 * @see https://firebase.google.com/docs/cloud-messaging/http-server-ref#table5
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class MulticastMessageResponseEvent extends Event
{
    /**
     * Unique ID (number) identifying the multicast message.
     *
     * @var int
     */
    private $multicastId;

    /**
     * Number of messages that were processed without an error.
     *
     * @var int
     */
    private $numberOfSuccessMessages;

    /**
     * Number of messages that could not be processed.
     *
     * @var int
     */
    private $numberOfFailedMessages;

    /**
     * Number of results that contain a canonical registration token.
     * A canonical registration ID is the registration token of the last registration requested by the client app.
     * This is the ID that the server should use when sending messages to the device.
     *
     * @var int
     */
    private $numberOfMessagesWithCanonicalRegistrationToken;

    /**
     * Array of objects representing the status of the messages processed.
     * The objects are listed in the same order as the request
     * (i.e., for each registration ID in the request, its result is listed in the same index in the response).
     *
     * @var array
     */
    private $results;

    /**
     * @param int   $multicastId
     * @param int   $success
     * @param int   $failure
     * @param int   $canonicalIds
     * @param array $results
     */
    public function __construct($multicastId, $success, $failure, $canonicalIds, array $results)
    {
        $this->multicastId = $multicastId;
        $this->numberOfSuccessMessages = $success;
        $this->numberOfFailedMessages = $failure;
        $this->numberOfMessagesWithCanonicalRegistrationToken = $canonicalIds;
        $this->results = $results;
    }

    /**
     * @return int
     */
    public function getMulticastId()
    {
        return $this->multicastId;
    }

    /**
     * @return int
     */
    public function getNumberOfSuccessMessages()
    {
        return $this->numberOfSuccessMessages;
    }

    /**
     * @return int
     */
    public function getNumberOfFailedMessages()
    {
        return $this->numberOfFailedMessages;
    }

    /**
     * @return int
     */
    public function getNumberOfMessagesWithCanonicalRegistrationToken()
    {
        return $this->numberOfMessagesWithCanonicalRegistrationToken;
    }

    /**
     * @return array
     */
    public function getResults()
    {
        return $this->results;
    }
}
