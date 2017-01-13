<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Response;

/**
 * MulticastMessageResponse.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class MulticastMessageResponse implements FirebaseResponseInterface
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
     * @return int
     */
    public function getMulticastId()
    {
        return $this->multicastId;
    }

    /**
     * @param int $multicastId
     *
     * @return $this
     */
    public function setMulticastId($multicastId)
    {
        $this->multicastId = $multicastId;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfSuccessMessages()
    {
        return $this->numberOfSuccessMessages;
    }

    /**
     * @param int $numberOfSuccessMessages
     *
     * @return $this
     */
    public function setNumberOfSuccessMessages($numberOfSuccessMessages)
    {
        $this->numberOfSuccessMessages = $numberOfSuccessMessages;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfFailedMessages()
    {
        return $this->numberOfFailedMessages;
    }

    /**
     * @param int $numberOfFailedMessages
     *
     * @return $this
     */
    public function setNumberOfFailedMessages($numberOfFailedMessages)
    {
        $this->numberOfFailedMessages = $numberOfFailedMessages;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfMessagesWithCanonicalRegistrationToken()
    {
        return $this->numberOfMessagesWithCanonicalRegistrationToken;
    }

    /**
     * @param int $numberOfMessagesWithCanonicalRegistrationToken
     *
     * @return $this
     */
    public function setNumberOfMessagesWithCanonicalRegistrationToken($numberOfMessagesWithCanonicalRegistrationToken)
    {
        $this->numberOfMessagesWithCanonicalRegistrationToken = $numberOfMessagesWithCanonicalRegistrationToken;

        return $this;
    }

    /**
     * @return array
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param array $results
     *
     * @return $this
     */
    public function setResults(array $results)
    {
        $this->results = $results;

        return $this;
    }
}
