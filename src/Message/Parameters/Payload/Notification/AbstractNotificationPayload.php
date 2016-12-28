<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Message\Parameters\Payload\Notification;

use Fresh\FirebaseCloudMessaging\Message\Parameters\Payload\PayloadInterface;

/**
 * AbstractNotificationPayload.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
abstract class AbstractNotificationPayload implements PayloadInterface
{
    /** @var string */
    private $body = '';

    /** @var string */
    private $title = '';

    /**
     * @param string $body
     *
     * @return $this|AbstractNotificationPayload
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $title
     *
     * @return $this|AbstractNotificationPayload
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}
