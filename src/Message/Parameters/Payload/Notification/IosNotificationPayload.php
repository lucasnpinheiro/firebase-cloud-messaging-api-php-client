<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\Fcm\Message\Parameters\Payload\Notification;

/**
 * IosNotificationPayload.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
final class IosNotificationPayload extends AbstractMobileNotificationPayload
{
    /**
     * @var string $badge Badge
     */
    private $badge;

    /**
     * Set badge.
     *
     * @param string $badge Badge
     *
     * @return $this|IosNotificationPayload
     */
    public function setBadge(string $badge): IosNotificationPayload
    {
        $this->badge = $badge;

        return $this;
    }

    /**
     * Get badge.
     *
     * @return string
     */
    public function getBadge(): string
    {
        return $this->badge;
    }
}
