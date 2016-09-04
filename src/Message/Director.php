<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\Fcm\Message;

use Fresh\Fcm\Message\Builder\MessageBuilderInterface;
use Fresh\Fcm\Message\Type\MessageInterface;

/**
 * Director.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class Director
{
    /**
     * @var MessageBuilderInterface $messageBuilder Message builder
     */
    private $messageBuilder;

    /**
     * Constructor.
     *
     * @param MessageBuilderInterface $messageBuilder Message builder
     */
    public function __construct(MessageBuilderInterface $messageBuilder)
    {
        $this->messageBuilder = $messageBuilder;
    }

    /**
     * The director don't know about concrete part.
     *
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
