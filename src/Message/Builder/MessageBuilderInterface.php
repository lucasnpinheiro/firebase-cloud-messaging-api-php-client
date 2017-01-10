<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Message\Builder;

use Fresh\FirebaseCloudMessaging\Message\Part\Options\OptionsInterface;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\PayloadInterface;
use Fresh\FirebaseCloudMessaging\Message\Part\Target\TargetInterface;
use Fresh\FirebaseCloudMessaging\Message\Type\MessageInterface;

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
     * @param TargetInterface $target
     *
     * @throws \Exception
     */
    public function buildTargetPart(TargetInterface $target);

    /**
     * @param OptionsInterface $options
     */
    public function buildOptionsPart(OptionsInterface $options);

    /**
     * @param PayloadInterface $payload
     */
    public function buildPayloadPart(PayloadInterface $payload);

    /**
     * @return MessageInterface
     */
    public function getMessage();
}
