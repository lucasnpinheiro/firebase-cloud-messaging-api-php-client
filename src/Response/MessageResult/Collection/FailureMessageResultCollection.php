<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Response\MessageResult\Collection;

use Fresh\FirebaseCloudMessaging\Response\MessageResult\FailureMessageResult;

/**
 * Class FailureMessageResultCollection.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class FailureMessageResultCollection extends AbstractMessageResultCollection
{
    /**
     * @param FailureMessageResult $messageResult
     */
    public function addMessageResult(FailureMessageResult $messageResult)
    {
        $this->messageResults[] = $messageResult;
    }
}
