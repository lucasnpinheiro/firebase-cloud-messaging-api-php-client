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
 * OptionsInterface.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
interface OptionsInterface
{
    /**
     * @return string
     */
    public function getCollapseKey();

    /**
     * @return string
     */
    public function getPriority();

    /**
     * @return bool
     */
    public function isContentAvailable();

    /**
     * @return int
     */
    public function getTimeToLive();

    /**
     * @return string
     */
    public function getRestrictedPackageName();

    /**
     * @return bool
     */
    public function isDryRun();
}
