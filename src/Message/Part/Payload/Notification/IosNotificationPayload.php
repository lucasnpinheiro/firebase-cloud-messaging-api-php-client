<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Message\Part\Payload\Notification;

use Fresh\FirebaseCloudMessaging\Message\Part\Payload\IosPayloadInterface;

/**
 * IosNotificationPayload.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class IosNotificationPayload extends AbstractMobileNotificationPayload implements IosPayloadInterface
{
    /** @var string */
    private $badge;

    /**
     * @param string $badge
     *
     * @return $this
     */
    public function setBadge($badge)
    {
        $this->badge = $badge;

        return $this;
    }

    /**
     * @return string
     */
    public function getBadge()
    {
        return $this->badge;
    }
}
