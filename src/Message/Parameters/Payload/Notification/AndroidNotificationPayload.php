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

/**
 * AndroidNotificationPayload.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
final class AndroidNotificationPayload extends AbstractMobileNotificationPayload
{
    /** @var string */
    private $icon;

    /** @var string */
    private $tag;

    /** @var string */
    private $color;

    /**
     * @param string $icon
     *
     * @return $this|AndroidNotificationPayload
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param string $tag
     *
     * @return $this|AndroidNotificationPayload
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param string $color
     *
     * @return $this|AndroidNotificationPayload
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
}
