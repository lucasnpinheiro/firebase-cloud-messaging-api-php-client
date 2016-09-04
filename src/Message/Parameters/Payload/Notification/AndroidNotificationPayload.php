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
 * AndroidNotificationPayload.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
final class AndroidNotificationPayload extends AbstractMobileNotificationPayload
{
    /**
     * @var string $icon Icon
     */
    private $icon;

    /**
     * @var string $tag Tag
     */
    private $tag;

    /**
     * @var string $color Color
     */
    private $color;

    /**
     * Set icon.
     *
     * @param string $icon Icon
     *
     * @return $this|AndroidNotificationPayload
     */
    public function setIcon(string $icon): AndroidNotificationPayload
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon.
     *
     * @return string
     */
    public function getIcon(): string
    {
        return $this->icon;
    }

    /**
     * Set tag.
     *
     * @param string $tag Tag
     *
     * @return $this|AndroidNotificationPayload
     */
    public function setTag(string $tag): AndroidNotificationPayload
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag.
     *
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * Set color.
     *
     * @param string $color Color
     *
     * @return $this|AndroidNotificationPayload
     */
    public function setColor(string $color): AndroidNotificationPayload
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color.
     *
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
}
