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
 * CanonicalTokenMessageResultInterface.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
interface CanonicalTokenMessageResultInterface extends MessageResultInterface
{
    /**
     * @return string
     */
    public function getCanonicalToken();

    /**
     * @param string $canonicalToken
     *
     * @return $this
     */
    public function setCanonicalToken($canonicalToken);
}
