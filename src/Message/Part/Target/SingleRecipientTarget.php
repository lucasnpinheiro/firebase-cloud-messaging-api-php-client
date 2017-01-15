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
 * SingleRecipientTarget.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class SingleRecipientTarget implements TargetInterface, TokenTargetInterface
{
    /** @var string */
    private $registrationToken = '';

    /**
     * @param string $registrationToken
     *
     * @return $this
     */
    public function setRegistrationToken($registrationToken)
    {
        $this->registrationToken = $registrationToken;

        return $this;
    }

    /**
     * @return string
     */
    public function getRegistrationToken()
    {
        return $this->registrationToken;
    }

    /**
     * {@inheritdoc}
     */
    public function getSequentialSentTokens()
    {
        return (array) $this->getRegistrationToken();
    }

    /**
     * {@inheritdoc}
     */
    public function getNumberOfSequentialSentTokens()
    {
        return !empty($this->getRegistrationToken()) ? 1 : 0;
    }
}
