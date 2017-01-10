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
 * MulticastTarget.
 *
 * Registration token is same as the registration ID. I just decided to use word `token` in the public API instead of `ID`.
 * In the documentation of Firebase Cloud Messaging both words are used.
 * @see https://firebase.google.com/docs/cloud-messaging/http-server-ref#table1
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class MulticastTarget implements TargetInterface
{
    /** @var string[] */
    private $registrationTokens = [];

    /**
     * @param string $registrationToken
     *
     * @return MulticastTarget
     */
    public function addRegistrationToken($registrationToken)
    {
        if (!in_array($registrationToken, $this->registrationTokens)) {
            $this->registrationTokens[] = $registrationToken;
        }

        return $this;
    }

    /**
     * @param string[] $registrationTokens
     *
     * @return MulticastTarget
     */
    public function setRegistrationTokens(array $registrationTokens)
    {
        $this->registrationTokens = $registrationTokens;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getRegistrationTokens()
    {
        return $this->registrationTokens;
    }
}
