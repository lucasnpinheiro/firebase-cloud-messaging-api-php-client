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

use Fresh\FirebaseCloudMessaging\Response\MessageResult\SuccessfulMessageResult;

/**
 * Class SuccessfulMessageResultCollection.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class SuccessfulMessageResultCollection extends AbstractMessageResultCollection
{
    /**
     * {@inheritdoc}
     */
    public function getSupportedMessageResultType()
    {
        return SuccessfulMessageResult::class;
    }
}
