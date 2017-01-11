<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Message\Part\Payload\Combined;

use Fresh\FirebaseCloudMessaging\Message\Part\Payload\AndroidPayloadInterface;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\Data\DataPayload;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\IosPayloadInterface;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\Notification\AbstractCommonNotificationPayload;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\WebPayloadInterface;

/**
 * CombinedPayload.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class CombinedPayload implements AndroidPayloadInterface, IosPayloadInterface, WebPayloadInterface
{
    /** @var DataPayload */
    private $dataPayload;

    /** @var AbstractCommonNotificationPayload */
    private $notificationPayload;

    /**
     * @param DataPayload $dataPayload
     *
     * @return $this
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
     * @param AbstractCommonNotificationPayload $notificationPayload
     *
     * @return $this
     */
    public function setNotificationPayload(AbstractCommonNotificationPayload $notificationPayload)
    {
        $this->notificationPayload = $notificationPayload;

        return $this;
    }

    /**
     * @return AbstractCommonNotificationPayload
     */
    public function getNotificationPayload()
    {
        return $this->notificationPayload;
    }
}
