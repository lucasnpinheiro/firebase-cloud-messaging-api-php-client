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
 * AbstractMobileNotificationPayload.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
abstract class AbstractMobileNotificationPayload extends AbstractNotificationPayload
{
    /** @var string */
    private $sound;

    /** @var string */
    private $clickAction;

    /** @var string */
    private $bodyLocKey;

    /** @var string[] */
    private $bodyLocArgs;

    /** @var string */
    private $titleLocKey;

    /** @var string[] */
    private $titleLocArgs;

    /**
     * @param string $sound
     *
     * @return $this|AbstractMobileNotificationPayload
     */
    public function setSound($sound)
    {
        $this->sound = $sound;

        return $this;
    }

    /**
     * @return string
     */
    public function getSound()
    {
        return $this->sound;
    }

    /**
     * @param string $clickAction
     *
     * @return $this|AbstractMobileNotificationPayload
     */
    public function setClickAction($clickAction)
    {
        $this->clickAction = $clickAction;

        return $this;
    }

    /**
     * @return string
     */
    public function getClickAction()
    {
        return $this->clickAction;
    }

    /**
     * @param string $bodyLocKey
     *
     * @return $this|AbstractMobileNotificationPayload
     */
    public function setBodyLocKey($bodyLocKey)
    {
        $this->bodyLocKey = $bodyLocKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getBodyLocKey()
    {
        return $this->bodyLocKey;
    }

    /**
     * @param string[] $bodyLocArgs
     *
     * @return $this|AbstractMobileNotificationPayload
     */
    public function setBodyLocArgs(array $bodyLocArgs)
    {
        $this->bodyLocArgs = $bodyLocArgs;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getBodyLocArgs()
    {
        return $this->bodyLocArgs;
    }

    /**
     * @param string $titleLocKey
     *
     * @return $this|AbstractMobileNotificationPayload
     */
    public function setTitleLocKey($titleLocKey)
    {
        $this->titleLocKey = $titleLocKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitleLocKey()
    {
        return $this->titleLocKey;
    }

    /**
     * @param string[] $titleLocArgs
     *
     * @return $this|AbstractMobileNotificationPayload
     */
    public function setTitleLocArgs(array $titleLocArgs)
    {
        $this->titleLocArgs = $titleLocArgs;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getTitleLocArgs()
    {
        return $this->titleLocArgs;
    }
}
