<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\Fcm\Message\Parameters\Options;

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
    private $ttl = TTL::DEFAULT_IN_SECONDS;

    /**
     * @var string $restrictedPackageName Restricted package name.
     */
    private $restrictedPackageName = '';

    /**
     * @var bool $dryRun Dry run
     */
    private $dryRun = false;

    /**
     * Set value for `collapse_key` option.
     *
     * @param string $collapseKey Collapse key
     *
     * @return Options
     */
    public function setCollapseKey(string $collapseKey): Options
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
     * Set value for `priority` option.
     *
     * @param string $priority Priority
     *
     * @return Options
     */
    public function setPriority(string $priority): Options
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
     * Set value for `content_available` option.
     *
     * @param bool $contentAvailable Content available
     *
     * @return Options
     */
    public function setContentAvailable(bool $contentAvailable): Options
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
     * Set value for `delay_with_idle` option.
     *
     * @param bool $delayWithIdle Delay with idle
     *
     * @return Options
     */
    public function setDelayWithIdle(bool $delayWithIdle): Options
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
     * Set value for `time_to_live` option.
     *
     * @param int $ttl Time to live
     *
     * @return Options
     */
    public function setTTL(int $ttl): Options
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
     * Set value for `restricted_package_name` option.
     *
     * @param string $restrictedPackageName Restricted package name
     *
     * @return Options
     */
    public function setRestrictedPackageName(string $restrictedPackageName): Options
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
     * Set value for `dry_run` option.
     *
     * @param bool $dryRun Dry run
     *
     * @return Options
     */
    public function setDryRun(bool $dryRun): Options
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
