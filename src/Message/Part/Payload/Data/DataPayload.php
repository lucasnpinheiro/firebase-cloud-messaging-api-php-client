<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Message\Part\Payload\Data;

use Fresh\FirebaseCloudMessaging\Message\Part\Payload\AndroidPayloadInterface;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\IosPayloadInterface;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\WebPayloadInterface;

/**
 * DataPayload.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class DataPayload implements AndroidPayloadInterface, IosPayloadInterface, WebPayloadInterface
{
    /** @var array */
    private $data = [];

    /**
     * @param array $data
     *
     * @return $this
     */
    public function setData(array $data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }
}
