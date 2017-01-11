<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Message\Type;

use Fresh\FirebaseCloudMessaging\Message\Part\Payload\WebPayloadInterface;

/**
 * WebMessage.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class WebMessage extends AbstractMessage
{
    /**
     * @param WebPayloadInterface $payload
     *
     * @return $this
     */
    public function setPayload(WebPayloadInterface $payload)
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * @return WebPayloadInterface
     */
    public function getPayload()
    {
        return $this->payload;
    }
}
