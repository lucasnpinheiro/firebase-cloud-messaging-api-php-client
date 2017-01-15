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

use Fresh\FirebaseCloudMessaging\Response\MessageResult\Collection\CanonicalTokenMessageResultCollection;
use Fresh\FirebaseCloudMessaging\Response\MessageResult\Collection\FailedMessageResultCollection;
use Fresh\FirebaseCloudMessaging\Response\MessageResult\Collection\SuccessfulMessageResultCollection;

/**
 * MulticastMessageResponse.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class MulticastMessageResponse implements MulticastMessageResponseInterface
{
    use MulticastMessageResponseTrait;

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
     * @param SuccessfulMessageResultCollection $successfulMessageResults
     *
     * @return $this
     */
    public function setSuccessfulMessageResults(SuccessfulMessageResultCollection $successfulMessageResults)
    {
        $this->successfulMessageResults = $successfulMessageResults;

        return $this;
    }

    /**
     * @param FailedMessageResultCollection $failedMessageResults
     *
     * @return $this
     */
    public function setFailedMessageResults(FailedMessageResultCollection $failedMessageResults)
    {
        $this->failedMessageResults = $failedMessageResults;

        return $this;
    }

    /**
     * @param CanonicalTokenMessageResultCollection $canonicalTokenMessageResults
     *
     * @return $this
     */
    public function setCanonicalTokenMessageResults(CanonicalTokenMessageResultCollection $canonicalTokenMessageResults)
    {
        $this->canonicalTokenMessageResults = $canonicalTokenMessageResults;

        return $this;
    }
}
