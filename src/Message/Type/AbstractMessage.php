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
 * AbstractMessage.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
abstract class AbstractMessage implements MessageInterface
{
    /**
     * @var TargetInterface $target Target
     */
    protected $target;

    /**
     * @var OptionsInterface $options Options
     */
    protected $options;

    /**
     * @var PayloadInterface $payload Payload
     */
    protected $payload;

    /**
     * {@inheritdoc}
     */
    public function setTarget(TargetInterface $target): MessageInterface
    {
        $this->target = $target;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTarget(): TargetInterface
    {
        return $this->target;
    }

    /**
     * {@inheritdoc}
     */
    public function setOptions(OptionsInterface $options): MessageInterface
    {
        $this->options = $options;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions(): OptionsInterface
    {
        return $this->options;
    }

    /**
     * {@inheritdoc}
     */
    public function setPayload(PayloadInterface $payload): MessageInterface
    {

    }

    /**
     * {@inheritdoc}
     */
    public function getPayload(): PayloadInterface
    {

    }

    /**
     * {@inheritdoc}
     */
    public function getBodyAsJson()
    {

    }
}
