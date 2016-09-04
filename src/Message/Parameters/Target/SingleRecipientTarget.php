<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\Fcm\Message\Parameters\Target;

/**
 * SingleRecipientTarget.
 *
 * Registration token is same as the registration ID. I just prefer to use word `token` in the public API instead of `ID`.
 * In the documentation of Firebase Cloud Messaging both words are used.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class SingleRecipientTarget implements TargetInterface
{
    /**
     * @var string $registrationToken Registration token
     */
    private $registrationToken = '';

    /**
     * Set registration token.
     *
     * @param string $registrationToken Registration token
     */
    public function setRegistrationToken(string $registrationToken)
    {
        $this->registrationToken = $registrationToken;
    }

    /**
     * Get registration token.
     *
     * @return string
     */
    public function getRegistrationToken(): string
    {
        return $this->registrationToken;
    }
}
