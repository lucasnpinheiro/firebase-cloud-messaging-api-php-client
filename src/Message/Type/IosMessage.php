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

use Fresh\FirebaseCloudMessaging\Message\Part\Payload\IosPayloadInterface;

/**
 * IosMessage.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class IosMessage extends AbstractMessage
{
    /**
     * @param IosPayloadInterface $payload
     *
     * @return $this
     */
    public function setPayload(IosPayloadInterface $payload)
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * @return IosPayloadInterface
     */
    public function getPayload()
    {
        return $this->payload;
    }
}
