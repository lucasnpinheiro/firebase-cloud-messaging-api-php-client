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
 * MulticastMessageResponseInterface.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
interface MulticastMessageResponseInterface extends FirebaseResponseInterface
{
    /**
     * @return int
     */
    public function getMulticastId();

    /**
     * @return SuccessfulMessageResultCollection|SuccessfulMessageResult[]
     */
    public function getSuccessfulMessageResults();

    /**
     * @return int
     */
    public function getNumberOfSuccessfulMessageResults();

    /**
     * @return bool
     */
    public function hasSuccessfulMessageResults();

    /**
     * @return FailedMessageResultCollection|FailedMessageResult[]
     */
    public function getFailedMessageResults();

    /**
     * @return int
     */
    public function getNumberOfFailedMessageResults();

    /**
     * @return bool
     */
    public function hasFailedMessageResults();

    /**
     * @return CanonicalTokenMessageResultCollection|CanonicalTokenMessageResult[]
     */
    public function getCanonicalTokenMessageResults();

    /**
     * @return int
     */
    public function getNumberOfCanonicalTokenMessageResults();

    /**
     * @return bool
     */
    public function hasCanonicalTokenMessageResults();
}
