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
 * FailureMessageResultInterface.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
interface FailureMessageResultInterface extends MessageResultInterface
{
    /**
     * @return string
     */
    public function getError();

    /**
     * @param string $error
     *
     * @return $this
     */
    public function setError($error);
}
