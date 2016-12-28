<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Message\Parameters\Options;

/**
 * Class Options.
 *
 * Set of options that can be used to change default behaviour of FCM notification.
 * @see https://firebase.google.com/docs/cloud-messaging/http-server-ref#collapse
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
final class Options implements OptionsInterface
{
    /** @var string */
    private $collapseKey = '';

    /** @var string */
    private $priority = Priority::NORMAL;

    /** @var bool */
    private $contentAvailable = false;

    /** @var bool */
    private $delayWithIdle = false;

    /** @var int */
    private $ttl = TTL::DEFAULT_IN_SECONDS;

    /** @var string */
    private $restrictedPackageName = '';

    /** @var bool */
    private $dryRun = false;

    /**
     * @param string $collapseKey
     *
     * @return Options
     */
    public function setCollapseKey($collapseKey)
    {
        $this->collapseKey = $collapseKey;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCollapseKey()
    {
        return $this->collapseKey;
    }

    /**
     * @param string $priority
     *
     * @return Options
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param bool $contentAvailable
     *
     * @return Options
     */
    public function setContentAvailable($contentAvailable)
    {
        $this->contentAvailable = $contentAvailable;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isContentAvailable()
    {
        return $this->contentAvailable;
    }

    /**
     * @param bool $delayWithIdle
     *
     * @return Options
     */
    public function setDelayWithIdle($delayWithIdle)
    {
        $this->delayWithIdle = $delayWithIdle;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isDelayWithIdle()
    {
        return $this->delayWithIdle;
    }

    /**
     * @param int $ttl
     *
     * @return Options
     */
    public function setTTL($ttl)
    {
        $this->ttl = $ttl;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTTL()
    {
        return $this->ttl;
    }

    /**
     * @param string $restrictedPackageName
     *
     * @return Options
     */
    public function setRestrictedPackageName($restrictedPackageName)
    {
        $this->restrictedPackageName = $restrictedPackageName;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getRestrictedPackageName()
    {
        return $this->restrictedPackageName;
    }

    /**
     * @param bool $dryRun
     *
     * @return Options
     */
    public function setDryRun($dryRun)
    {
        $this->dryRun = $dryRun;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isDryRun()
    {
        return $this->dryRun;
    }
}
