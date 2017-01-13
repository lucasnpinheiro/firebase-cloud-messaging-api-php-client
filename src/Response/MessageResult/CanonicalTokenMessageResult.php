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
 * Class CanonicalTokenMessageResult.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class CanonicalTokenMessageResult extends AbstractSuccessMessageResult implements CanonicalTokenMessageResultInterface
{
    /** @var string */
    private $canonicalToken;

    /**
     * {@inheritdoc}
     */
    public function getCanonicalToken()
    {
        return $this->canonicalToken;
    }

    /**
     * {@inheritdoc}
     */
    public function setCanonicalToken($canonicalToken)
    {
        $this->canonicalToken = $canonicalToken;

        return $this;
    }
}
