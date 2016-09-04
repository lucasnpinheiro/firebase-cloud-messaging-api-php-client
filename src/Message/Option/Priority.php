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
 * Priority.
 *
 * @see https://firebase.google.com/docs/cloud-messaging/http-server-ref#priority
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
final class Priority
{
    /**
     * On iOS this value corresponds to 5.
     */
    const NORMAL = 'normal';

    /**
     * On iOS this value corresponds to 10.
     */
    const HIGH = 'high';
}
