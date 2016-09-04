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

use Fresh\Fcm\Message\Parameters\Payload\PayloadInterface;

/**
 * AbstractNotificationPayload.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
abstract class AbstractNotificationPayload implements PayloadInterface
{
    /**
     * @var string $body Body
     */
    private $body = '';

    /**
     * @var string $title Title
     */
    private $title = '';

    /**
     * Set body.
     *
     * @param string $body Body
     *
     * @return $this|AbstractNotificationPayload
     */
    public function setBody(string $body): AbstractNotificationPayload
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body.
     *
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * Set title.
     *
     * @param string $title Title
     *
     * @return $this|AbstractNotificationPayload
     */
    public function setTitle(string $title): AbstractNotificationPayload
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
}
