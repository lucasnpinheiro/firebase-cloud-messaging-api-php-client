<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Message\Part\Options;

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
    /**
     * Default `time_to_live` option value is 4 weeks (it is also the maximum TTL allowed for FCM).
     * In seconds it is 60 seconds * 60 minutes * 24 hours * 28 days = 2419200 seconds.
     */
    const DEFAULT_TTL_IN_SECONDS = 2419200;

    /** @var string */
    private $collapseKey = '';

    /** @var string */
    private $priority = Priority::NORMAL;

    /** @var bool */
    private $contentAvailable = false;

    /** @var int */
    private $ttl = self::DEFAULT_TTL_IN_SECONDS;

    /** @var string */
    private $restrictedPackageName = '';

    /** @var bool */
    private $dryRun = false;

    /**
     * @param string $collapseKey
     *
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @param int $timeToLive
     *
     * @return $this
     */
    public function setTimeToLive($timeToLive)
    {
        $this->ttl = $timeToLive;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTimeToLive()
    {
        return $this->ttl;
    }

    /**
     * @param string $restrictedPackageName
     *
     * @return $this
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
     * @return $this
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
