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

use Fresh\FirebaseCloudMessaging\Message\Part\Options\OptionsInterface;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\CommonPayloadInterface;
use Fresh\FirebaseCloudMessaging\Message\Part\Target\TargetInterface;

/**
 * AbstractMessage.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
abstract class AbstractMessage
{
    /** @var TargetInterface */
    protected $target;

    /** @var OptionsInterface */
    protected $options;

    /** @var CommonPayloadInterface */
    protected $payload;

    /**
     * @param TargetInterface $target
     *
     * @return $this
     */
    public function setTarget(TargetInterface $target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @return TargetInterface
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param OptionsInterface $options
     *
     * @return $this
     */
    public function setOptions(OptionsInterface $options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @return OptionsInterface
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @return CommonPayloadInterface
     */
    abstract public function getPayload();
}
