<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\Fcm\Message\Type;

use Fresh\Fcm\Message\Parameters\Options\OptionsInterface;
use Fresh\Fcm\Message\Parameters\Payload\PayloadInterface;
use Fresh\Fcm\Message\Parameters\Target\TargetInterface;

/**
 * MessageInterface.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
interface MessageInterface
{
    /**
     * Set target.
     *
     * @param TargetInterface $target Target
     *
     * @return MessageInterface
     */
    public function setTarget(TargetInterface $target): MessageInterface;

    /**
     * Get target.
     *
     * @return TargetInterface
     */
    public function getTarget(): TargetInterface;

    /**
     * Set options.
     *
     * @param OptionsInterface $options Options
     *
     * @return MessageInterface
     */
    public function setOptions(OptionsInterface $options): MessageInterface;

    /**
     * Get options.
     *
     * @return OptionsInterface
     */
    public function getOptions(): OptionsInterface;

    /**
     * Set payload.
     *
     * @param PayloadInterface $payload Payload
     *
     * @return MessageInterface
     */
    public function setPayload(PayloadInterface $payload): MessageInterface;

    /**
     * Get payload.
     *
     * @return PayloadInterface
     */
    public function getPayload(): PayloadInterface;

    /**
     * Get body message as JSON.
     *
     * @return string
     */
    public function getBodyAsJson();
}
