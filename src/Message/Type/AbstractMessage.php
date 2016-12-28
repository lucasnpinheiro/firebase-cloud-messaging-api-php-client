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
 * AbstractMessage.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
abstract class AbstractMessage implements MessageInterface
{
    /** @var TargetInterface */
    protected $target;

    /** @var OptionsInterface */
    protected $options;

    /** @var PayloadInterface */
    protected $payload;

    /**
     * {@inheritdoc}
     */
    public function setTarget(TargetInterface $target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * {@inheritdoc}
     */
    public function setOptions(OptionsInterface $options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * {@inheritdoc}
     */
    public function setPayload(PayloadInterface $payload)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getPayload()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getBodyAsJson()
    {
    }
}
