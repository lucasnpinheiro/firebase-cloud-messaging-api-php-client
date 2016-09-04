<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\Fcm\Message\Builder;

use Fresh\Fcm\Message\Parameters\Options\OptionsInterface;
use Fresh\Fcm\Message\Parameters\Payload\PayloadInterface;
use Fresh\Fcm\Message\Parameters\Target\TargetInterface;
use Fresh\Fcm\Message\Type\MessageInterface;

/**
 * MessageBuilderInterface.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
interface MessageBuilderInterface
{
    /**
     * Create message.
     */
    public function createMessage();

    /**
     * Build target part of the message.
     *
     * @param TargetInterface $target
     *
     * @throws \Exception
     */
    public function buildTargetPart(TargetInterface $target);

    /**
     * Build options part of the message.
     *
     * @param OptionsInterface $options Options
     */
    public function buildOptionsPart(OptionsInterface $options);

    /**
     * Build payload part of the message.
     *
     * @param PayloadInterface $payload Payload
     */
    public function buildPayloadPart(PayloadInterface $payload);

    /**
     * Get message.
     *
     * @return MessageInterface
     */
    public function getMessage(): MessageInterface;
}
