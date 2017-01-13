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

use Fresh\FirebaseCloudMessaging\Response\MessageResult\SuccessMessageResult;

/**
 * Class SuccessMessageResultCollection.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class SuccessMessageResultCollection extends AbstractMessageResultCollection
{
    /**
     * @param SuccessMessageResult $messageResult
     */
    public function addMessageResult(SuccessMessageResult $messageResult)
    {
        $this->messageResults[] = $messageResult;
    }
}
