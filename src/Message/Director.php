<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Message;

use Fresh\FirebaseCloudMessaging\Message\Builder\MessageBuilderInterface;
use Fresh\FirebaseCloudMessaging\Message\Type\MessageInterface;

/**
 * Director.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class Director
{
    /** @var MessageBuilderInterface */
    private $messageBuilder;

    /**
     * @param MessageBuilderInterface $messageBuilder
     */
    public function __construct(MessageBuilderInterface $messageBuilder)
    {
        $this->messageBuilder = $messageBuilder;
    }

    /**
     * @param MessageBuilderInterface $builder
     *
     * @return MessageInterface
     */
    public function build(MessageBuilderInterface $builder)
    {
        $builder->createMessage();
        $builder->buildTargetPart();
        $builder->buildOptionsPart();
        $builder->buildPayloadPart();

        return $builder->getMessage();
    }
}
