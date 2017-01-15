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

use Fresh\FirebaseCloudMessaging\Response\MessageResult\CanonicalTokenMessageResult;
use Fresh\FirebaseCloudMessaging\Response\MessageResult\Collection\CanonicalTokenMessageResultCollection;
use Fresh\FirebaseCloudMessaging\Response\MessageResult\Collection\FailedMessageResultCollection;
use Fresh\FirebaseCloudMessaging\Response\MessageResult\Collection\SuccessfulMessageResultCollection;
use Fresh\FirebaseCloudMessaging\Response\MessageResult\FailedMessageResult;
use Fresh\FirebaseCloudMessaging\Response\MessageResult\SuccessfulMessageResult;

/**
 * MulticastMessageResponseTrait.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
trait MulticastMessageResponseTrait
{
    /** @var int */
    private $multicastId;

    /** @var SuccessfulMessageResultCollection */
    private $successfulMessageResults;

    /** @var FailedMessageResultCollection */
    private $failedMessageResults;

    /** @var CanonicalTokenMessageResultCollection */
    private $canonicalTokenMessageResults;

    /**
     * @return int
     */
    public function getMulticastId()
    {
        return $this->multicastId;
    }

    /**
     * @return SuccessfulMessageResultCollection|SuccessfulMessageResult[]
     */
    public function getSuccessfulMessageResults()
    {
        return $this->successfulMessageResults;
    }

    /**
     * @return int
     */
    public function getNumberOfSuccessfulMessageResults()
    {
        return count($this->successfulMessageResults);
    }

    /**
     * @return bool
     */
    public function hasSuccessfulMessageResults()
    {
        return $this->getNumberOfSuccessfulMessageResults() > 0;
    }

    /**
     * @return FailedMessageResultCollection|FailedMessageResult[]
     */
    public function getFailedMessageResults()
    {
        return $this->failedMessageResults;
    }

    /**
     * @return int
     */
    public function getNumberOfFailedMessageResults()
    {
        return count($this->failedMessageResults);
    }

    /**
     * @return bool
     */
    public function hasFailedMessageResults()
    {
        return $this->getNumberOfFailedMessageResults() > 0;
    }

    /**
     * @return CanonicalTokenMessageResultCollection|CanonicalTokenMessageResult[]
     */
    public function getCanonicalTokenMessageResults()
    {
        return $this->canonicalTokenMessageResults;
    }

    /**
     * @return int
     */
    public function getNumberOfCanonicalTokenMessageResults()
    {
        return count($this->canonicalTokenMessageResults);
    }

    /**
     * @return bool
     */
    public function hasCanonicalTokenMessageResults()
    {
        return $this->getNumberOfCanonicalTokenMessageResults() > 0;
    }
}
