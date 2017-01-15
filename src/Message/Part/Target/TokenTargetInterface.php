<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Message\Part\Target;

/**
 * TokenTargetInterface.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
interface TokenTargetInterface
{
    /**
     * @return array
     */
    public function getSequentialSentTokens();

    /**
     * @return int
     */
    public function getNumberOfSequentialSentTokens();
}
