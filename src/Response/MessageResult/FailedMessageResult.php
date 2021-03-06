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
 * Class FailedMessageResult.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class FailedMessageResult extends AbstractMessageResult implements FailedMessageResultInterface
{
    /** @var string */
    private $error = '';

    /**
     * {@inheritdoc}
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * {@inheritdoc}
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }
}
