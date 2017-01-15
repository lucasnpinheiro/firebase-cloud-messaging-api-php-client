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
 * AbstractSuccessfulMessageResult.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
abstract class AbstractSuccessfulMessageResult extends AbstractMessageResult implements SuccessfulMessageResultInterface
{
    /** @var string */
    private $messageId = '';

    /**
     * {@inheritdoc}
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * {@inheritdoc}
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;

        return $this;
    }
}
