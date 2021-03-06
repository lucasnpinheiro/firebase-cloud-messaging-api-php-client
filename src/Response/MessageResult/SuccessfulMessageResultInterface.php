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
 * SuccessfulMessageResultInterface.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
interface SuccessfulMessageResultInterface extends MessageResultInterface
{
    /**
     * @return string
     */
    public function getMessageId();

    /**
     * @param string $messageId
     *
     * @return $this
     */
    public function setMessageId($messageId);
}
