<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\Fcm\Message\Option;

/**
 * Option.
 *
 * List of options that can be used to change default behaviour of FCM notification.
 * @see https://firebase.google.com/docs/cloud-messaging/http-server-ref#collapse
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
final class Option implements OptionInterface
{
    /**
     * @var string $collapseKey Collapse key
     */
    private $collapseKey = '';

    /**
     * @var string $priority Priority
     */
    private $priority = Priority::NORMAL;

    /**
     * @var bool $contentAvailable Content available
     */
    private $contentAvailable = false;

    /**
     * @var bool $delayWithIdle Delay with idle
     */
    private $delayWithIdle = false;

    /**
     * @var int $ttl Time to live
     */
    private $ttl = self::DEFAULT_TTL_IN_SECONDS;

    /**
     * @var string $restrictedPackageName Restricted package name.
     */
    private $restrictedPackageName = '';

    /**
     * @var bool $dryRun Dry run
     */
    private $dryRun = false;

    /**
     * {@inheritdoc}
     */
    public function setCollapseKey(string $collapseKey): OptionInterface
    {
        $this->collapseKey = $collapseKey;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCollapseKey(): string
    {
        return $this->collapseKey;
    }

    /**
     * {@inheritdoc}
     */
    public function setPriority(string $priority): OptionInterface
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPriority(): string
    {
        return $this->priority;
    }

    /**
     * {@inheritdoc}
     */
    public function setContentAvailable(bool $contentAvailable): OptionInterface
    {
        $this->contentAvailable = $contentAvailable;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isContentAvailable(): bool
    {
        return $this->contentAvailable;
    }

    /**
     * {@inheritdoc}
     */
    public function setDelayWithIdle(bool $delayWithIdle): OptionInterface
    {
        $this->delayWithIdle = $delayWithIdle;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isDelayWithIdle(): bool
    {
        return $this->delayWithIdle;
    }

    /**
     * {@inheritdoc}
     */
    public function setTTL(int $ttl): OptionInterface
    {
        $this->ttl = $ttl;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTTL(): int
    {
        return $this->ttl;
    }

    /**
     * {@inheritdoc}
     */
    public function setRestrictedPackageName(string $restrictedPackageName): OptionInterface
    {
        $this->restrictedPackageName = $restrictedPackageName;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getRestrictedPackageName(): string
    {
        return $this->restrictedPackageName;
    }

    /**
     * {@inheritdoc}
     */
    public function setDryRun(bool $dryRun): OptionInterface
    {
        $this->dryRun = $dryRun;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isDryRun(): bool
    {
        return $this->dryRun;
    }
}
