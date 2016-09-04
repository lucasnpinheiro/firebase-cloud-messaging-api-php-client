<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\Fcm\Message\Parameters\Option;

/**
 * OptionsInterface.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
interface OptionsInterface
{
    /**
     * Get value of `collapse_key` option.
     *
     * @return string
     */
    public function getCollapseKey(): string;

    /**
     * Get value of `priority` option.
     *
     * @return string
     */
    public function getPriority(): string;

    /**
     * Get value of `content_available` option.
     *
     * @return bool
     */
    public function isContentAvailable(): bool;

    /**
     * Get value of `delay_with_idle` option.
     *
     * @return bool
     */
    public function isDelayWithIdle(): bool;

    /**
     * Get value of `time_to_live` option.
     *
     * @return int
     */
    public function getTTL(): int;

    /**
     * Get value of `restricted_package_name` option.
     *
     * @return string
     */
    public function getRestrictedPackageName(): string;

    /**
     * Get value of `dry_run` option.
     *
     * @return bool
     */
    public function isDryRun(): bool;
}
