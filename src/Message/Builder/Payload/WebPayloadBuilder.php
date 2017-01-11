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

use Fresh\FirebaseCloudMessaging\Message\Part\Payload\Notification\WebNotificationPayload;

/**
 * WebPayloadBuilder.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class WebPayloadBuilder extends AbstractPayloadBuilder
{
    /**
     * @param WebNotificationPayload $payload
     */
    public function __construct(WebNotificationPayload $payload)
    {
        $this->payload = $payload;
    }

    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $this->payloadPart = [];

        if (!empty($this->payload->getTitle())) {
            $this->payloadPart['title'] = (string) $this->payload->getTitle();
        }

        if (!empty($this->payload->getBody())) {
            $this->payloadPart['body'] = (string) $this->payload->getBody();
        }

        if (!empty($this->payload->getIcon())) {
            $this->payloadPart['icon'] = (string) $this->payload->getIcon();
        }

        if (!empty($this->payload->getClickAction())) {
            $this->payloadPart['click_action'] = (string) $this->payload->getClickAction();
        }

        return $this;
    }
}
