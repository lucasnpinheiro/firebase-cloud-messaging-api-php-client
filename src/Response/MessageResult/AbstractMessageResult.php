<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Response\MessageResult;

/**
 * AbstractMessageResult.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
abstract class AbstractMessageResult implements MessageResultInterface
{
    /** @var string */
    private $token;

    /**
     * {@inheritdoc}
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * {@inheritdoc}
     */
    public function setToken($token)
    {
        $this->token = $token;
    }
}
