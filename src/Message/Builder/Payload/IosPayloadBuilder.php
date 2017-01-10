<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Message\Builder\Payload;

use Fresh\FirebaseCloudMessaging\Message\Part\Payload\Notification\IosNotificationPayload;

/**
 * IosPayloadBuilder.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class IosPayloadBuilder extends AbstractPayloadBuilder
{
    /**
     * @param IosNotificationPayload $payload
     */
    public function __construct(IosNotificationPayload $payload)
    {
        $this->payload = $payload;
    }

    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $payloadPart = [];

        if (!empty($this->payload->getTitle())) {
            $payloadPart['title'] = (string) $this->payload->getTitle();
        }

        if (!empty($this->payload->getBody())) {
            $payloadPart['body'] = (string) $this->payload->getBody();
        }

        if (!empty($this->payload->getSound())) {
            $payloadPart['sound'] = (string) $this->payload->getSound();
        }

        if (!empty($this->payload->getBadge())) {
            $payloadPart['badge'] = (string) $this->payload->getBadge();
        }

        if (!empty($this->payload->getClickAction())) {
            $payloadPart['click_action'] = (string) $this->payload->getClickAction();
        }

        if (!empty($this->payload->getBodyLocKey())) {
            $payloadPart['body_loc_key'] = (string) $this->payload->getBodyLocKey();
        }

        if (!empty($this->payload->getBodyLocArgs())) {
            $payloadPart['body_loc_args'] = (array) $this->payload->getBodyLocArgs();
        }

        if (!empty($this->payload->getTitleLocKey())) {
            $payloadPart['title_loc_key'] = (string) $this->payload->getTitleLocKey();
        }

        if (!empty($this->payload->getTitleLocArgs())) {
            $payloadPart['title_loc_args'] = (array) $this->payload->getTitleLocArgs();
        }

        return $payloadPart;
    }
}
