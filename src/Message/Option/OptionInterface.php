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
 * OptionInterface.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
interface OptionInterface
{
    /**
     * Default `time_to_live` option value is 4 weeks.
     * In seconds it is 60 seconds * 60 minutes * 24 hours * 28 days = 2419200 seconds.
     */
    const DEFAULT_TTL_IN_SECONDS = 2419200;

    /**
     * Set value for `collapse_key` option.
     *
     * @param string $collapseKey Collapse key
     *
     * @return OptionInterface
     */
    public function setCollapseKey(string $collapseKey): OptionInterface;

    /**
     * Get value of `collapse_key` option.
     *
     * @return string
     */
    public function getCollapseKey(): string;

    /**
     * Set value for `priority` option.
     *
     * @param string $priority Priority
     *
     * @return OptionInterface
     */
    public function setPriority(string $priority): OptionInterface;

    /**
     * Get value of `priority` option.
     *
     * @return string
     */
    public function getPriority(): string;

    /**
     * Set value for `content_available` option.
     *
     * @param bool $contentAvailable Content available
     *
     * @return OptionInterface
     */
    public function setContentAvailable(bool $contentAvailable): OptionInterface;

    /**
     * Get value of `content_available` option.
     *
     * @return bool
     */
    public function isContentAvailable(): bool;

    /**
     * Set value for `delay_with_idle` option.
     *
     * @param bool $delayWithIdle Delay with idle
     *
     * @return OptionInterface
     */
    public function setDelayWithIdle(bool $delayWithIdle): OptionInterface;

    /**
     * Get value of `delay_with_idle` option.
     *
     * @return bool
     */
    public function isDelayWithIdle(): bool;

    /**
     * Set value for `time_to_live` option.
     *
     * @param int $ttl Time to live
     *
     * @return mixed
     */
    public function setTTL(int $ttl): OptionInterface;

    /**
     * Get value of `time_to_live` option.
     *
     * @return int
     */
    public function getTTL(): int;

    /**
     * Set value for `restricted_package_name` option.
     *
     * @param string $restrictedPackageName Restricted package name
     *
     * @return OptionInterface
     */
    public function setRestrictedPackageName(string $restrictedPackageName): OptionInterface;

    /**
     * Get value of `restricted_package_name` option.
     *
     * @return string
     */
    public function getRestrictedPackageName(): string;

    /**
     * Set value for `dry_run` option.
     *
     * @param bool $dryRun Dry run
     *
     * @return OptionInterface
     */
    public function setDryRun(bool $dryRun): OptionInterface;

    /**
     * Get value of `dry_run` option.
     *
     * @return bool
     */
    public function isDryRun(): bool;
}
