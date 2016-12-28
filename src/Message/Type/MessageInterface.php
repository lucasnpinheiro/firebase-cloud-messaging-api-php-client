<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Message\Type;

use Fresh\FirebaseCloudMessaging\Message\Parameters\Options\OptionsInterface;
use Fresh\FirebaseCloudMessaging\Message\Parameters\Payload\PayloadInterface;
use Fresh\FirebaseCloudMessaging\Message\Parameters\Target\TargetInterface;

/**
 * MessageInterface.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
interface MessageInterface
{
    /**
     * @param TargetInterface $target
     *
     * @return MessageInterface
     */
    public function setTarget(TargetInterface $target);

    /**
     * @return TargetInterface
     */
    public function getTarget();

    /**
     * @param OptionsInterface $options
     *
     * @return MessageInterface
     */
    public function setOptions(OptionsInterface $options);

    /**
     * @return OptionsInterface
     */
    public function getOptions();

    /**
     * @param PayloadInterface $payload
     *
     * @return MessageInterface
     */
    public function setPayload(PayloadInterface $payload);

    /**
     * @return PayloadInterface
     */
    public function getPayload();

    /**
     * @return string
     */
    public function getBodyAsJson();
}
