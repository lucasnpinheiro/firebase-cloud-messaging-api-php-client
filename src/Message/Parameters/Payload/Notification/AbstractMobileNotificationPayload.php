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
 * AbstractMobileNotificationPayload.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
abstract class AbstractMobileNotificationPayload extends AbstractNotificationPayload
{
    /**
     * @var string $body Sound
     */
    private $sound;

    /**
     * @var string $title Click action
     */
    private $clickAction;

    /**
     * @var string $bodyLocKey Body loc key
     */
    private $bodyLocKey;

    /**
     * @var string[] $bodyLocArgs Body loc args
     */
    private $bodyLocArgs;

    /**
     * @var string $titleLocKey Title loc key
     */
    private $titleLocKey;

    /**
     * @var string[] $titleLocArgs Title loc args
     */
    private $titleLocArgs;

    /**
     * Set sound.
     *
     * @param string $sound Sound
     *
     * @return $this|AbstractMobileNotificationPayload
     */
    public function setSound(string $sound): AbstractMobileNotificationPayload
    {
        $this->sound = $sound;

        return $this;
    }

    /**
     * Get sound.
     *
     * @return string
     */
    public function getSound(): string
    {
        return $this->sound;
    }

    /**
     * Set click action.
     *
     * @param string $clickAction Click action
     *
     * @return $this|AbstractMobileNotificationPayload
     */
    public function setClickAction(string $clickAction): AbstractMobileNotificationPayload
    {
        $this->clickAction = $clickAction;

        return $this;
    }

    /**
     * Get click action.
     *
     * @return string
     */
    public function getClickAction(): string
    {
        return $this->clickAction;
    }

    /**
     * Set body loc key.
     *
     * @param string $bodyLocKey Body loc key
     *
     * @return $this|AbstractMobileNotificationPayload
     */
    public function setBodyLocKey(string $bodyLocKey): AbstractMobileNotificationPayload
    {
        $this->bodyLocKey = $bodyLocKey;

        return $this;
    }

    /**
     * Get body loc key.
     *
     * @return string
     */
    public function getBodyLocKey(): string
    {
        return $this->bodyLocKey;
    }

    /**
     * Set body loc args.
     *
     * @param string[] $bodyLocArgs Body loc args
     *
     * @return $this|AbstractMobileNotificationPayload
     */
    public function setBodyLocArgs(array $bodyLocArgs): AbstractMobileNotificationPayload
    {
        $this->bodyLocArgs = $bodyLocArgs;

        return $this;
    }

    /**
     * Get body loc args.
     *
     * @return string[]
     */
    public function getBodyLocArgs(): array
    {
        return $this->bodyLocArgs;
    }

    /**
     * Set title loc key.
     *
     * @param string $titleLocKey Title loc key
     *
     * @return $this|AbstractMobileNotificationPayload
     */
    public function setTitleLocKey(string $titleLocKey): AbstractMobileNotificationPayload
    {
        $this->titleLocKey = $titleLocKey;

        return $this;
    }

    /**
     * Get title loc key.
     *
     * @return string
     */
    public function getTitleLocKey(): string
    {
        return $this->titleLocKey;
    }

    /**
     * Set title loc args.
     *
     * @param string[] $titleLocArgs Title loc args
     *
     * @return $this|AbstractMobileNotificationPayload
     */
    public function setTitleLocArgs(array $titleLocArgs): AbstractMobileNotificationPayload
    {
        $this->titleLocArgs = $titleLocArgs;

        return $this;
    }

    /**
     * Get title loc args.
     *
     * @return string[]
     */
    public function getTitleLocArgs(): array
    {
        return $this->titleLocArgs;
    }
}
