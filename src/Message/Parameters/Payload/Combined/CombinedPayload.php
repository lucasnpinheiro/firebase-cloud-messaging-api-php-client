<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Message\Parameters\Payload\Combined;

use Fresh\FirebaseCloudMessaging\Message\Parameters\Payload\Data\DataPayload;
use Fresh\FirebaseCloudMessaging\Message\Parameters\Payload\Notification\AbstractNotificationPayload;
use Fresh\FirebaseCloudMessaging\Message\Parameters\Payload\PayloadInterface;

/**
 * CombinedPayload.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class CombinedPayload implements PayloadInterface
{
    /** @var DataPayload */
    private $dataPayload;

    /** @var AbstractNotificationPayload */
    private $notificationPayload;

    /**
     * @param DataPayload $dataPayload
     *
     * @return CombinedPayload
     */
    public function setDataPayload(DataPayload $dataPayload)
    {
        $this->dataPayload = $dataPayload;

        return $this;
    }

    /**
     * @return DataPayload
     */
    public function getDataPayload()
    {
        return $this->dataPayload;
    }

    /**
     * @param AbstractNotificationPayload $notificationPayload
     *
     * @return CombinedPayload
     */
    public function setNotificationPayload(AbstractNotificationPayload $notificationPayload)
    {
        $this->notificationPayload = $notificationPayload;

        return $this;
    }

    /**
     * @return AbstractNotificationPayload
     */
    public function getNotificationPayload()
    {
        return $this->notificationPayload;
    }
}
