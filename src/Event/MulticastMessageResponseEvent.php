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

use Fresh\FirebaseCloudMessaging\Response\MessageResult\CanonicalTokenMessageResult;
use Fresh\FirebaseCloudMessaging\Response\MessageResult\Collection\CanonicalTokenMessageResultCollection;
use Fresh\FirebaseCloudMessaging\Response\MessageResult\Collection\FailureMessageResultCollection;
use Fresh\FirebaseCloudMessaging\Response\MessageResult\Collection\SuccessMessageResultCollection;
use Fresh\FirebaseCloudMessaging\Response\MessageResult\FailureMessageResult;
use Fresh\FirebaseCloudMessaging\Response\MessageResult\SuccessMessageResult;
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
    /** @var int */
    private $multicastId;

    /** @var SuccessMessageResultCollection */
    private $successMessageResults;

    /** @var FailureMessageResultCollection */
    private $failureMessageResults;

    /** @var CanonicalTokenMessageResultCollection */
    private $canonicalTokenMessageResults;

    /**
     * @param int                                   $multicastId
     * @param SuccessMessageResultCollection        $successMessageResults
     * @param FailureMessageResultCollection        $failureMessageResults
     * @param CanonicalTokenMessageResultCollection $canonicalTokenMessageResults
     */
    public function __construct(
        $multicastId,
        SuccessMessageResultCollection $successMessageResults,
        FailureMessageResultCollection $failureMessageResults,
        CanonicalTokenMessageResultCollection $canonicalTokenMessageResults
    ) {
        $this->multicastId = $multicastId;
        $this->successMessageResults = $successMessageResults;
        $this->failureMessageResults = $failureMessageResults;
        $this->canonicalTokenMessageResults = $canonicalTokenMessageResults;
    }

    /**
     * @return int
     */
    public function getMulticastId()
    {
        return $this->multicastId;
    }

    /**
     * @return SuccessMessageResultCollection|SuccessMessageResult[]
     */
    public function getSuccessMessageResults()
    {
        return $this->successMessageResults;
    }

    /**
     * @return FailureMessageResultCollection|FailureMessageResult[]
     */
    public function getFailureMessageResults()
    {
        return $this->failureMessageResults;
    }

    /**
     * @return CanonicalTokenMessageResultCollection|CanonicalTokenMessageResult[]
     */
    public function getCanonicalTokenMessageResults()
    {
        return $this->canonicalTokenMessageResults;
    }
}
