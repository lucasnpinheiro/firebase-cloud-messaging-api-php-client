<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\Fcm\Message\Parameters\Payload\Combined;

use Fresh\Fcm\Message\Parameters\Payload\Data\DataPayload;
use Fresh\Fcm\Message\Parameters\Payload\Notification\AbstractNotificationPayload;
use Fresh\Fcm\Message\Parameters\Payload\PayloadInterface;

/**
 * CombinedPayload.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class CombinedPayload implements PayloadInterface
{
    /**
     * @var DataPayload $dataPayload Data payload
     */
    private $dataPayload;

    /**
     * @var AbstractNotificationPayload $notificationPayload Notification payload
     */
    private $notificationPayload;

    /**
     * Set data payload.
     *
     * @param DataPayload $dataPayload Data payload
     *
     * @return CombinedPayload
     */
    public function setDataPayload(DataPayload $dataPayload): CombinedPayload
    {
        $this->dataPayload = $dataPayload;

        return $this;
    }

    /**
     * Get data payload.
     *
     * @return DataPayload
     */
    public function getDataPayload(): DataPayload
    {
        return $this->dataPayload;
    }

    /**
     * Set notification payload.
     *
     * @param AbstractNotificationPayload $notificationPayload Notification payload
     *
     * @return CombinedPayload
     */
    public function setNotificationPayload(AbstractNotificationPayload $notificationPayload): CombinedPayload
    {
        $this->notificationPayload = $notificationPayload;

        return $this;
    }

    /**
     * Get notification payload.
     *
     * @return AbstractNotificationPayload
     */
    public function getNotificationPayload(): AbstractNotificationPayload
    {
        return $this->notificationPayload;
    }
}
