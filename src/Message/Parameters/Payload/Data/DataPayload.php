<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\Fcm\Message\Parameters\Payload\Data;

use Fresh\Fcm\Message\Parameters\Payload\PayloadInterface;

/**
 * DataPayload.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class DataPayload implements PayloadInterface
{
    /**
     * @var array $data Data
     */
    private $data = [];

    /**
     * Set data.
     *
     * @param array $data Data
     */
    public function setData(array $data)
    {
        $this->data = $data;
    }

    /**
     * Get data.
     *
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }
}
