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

use Fresh\FirebaseCloudMessaging\Message\Part\Payload\AndroidPayloadInterface;

/**
 * AndroidMessage.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class AndroidMessage extends AbstractMessage
{
    /**
     * @param AndroidPayloadInterface $payload
     *
     * @return $this
     */
    public function setPayload(AndroidPayloadInterface $payload)
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * @return AndroidPayloadInterface
     */
    public function getPayload()
    {
        return $this->payload;
    }
}
