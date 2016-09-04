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
 * Class TTL.
 *
 * Contains default value in seconds for the `time_to_live` option.
 *
 * @see https://firebase.google.com/docs/cloud-messaging/http-server-ref#ttl
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
final class TTL
{
    /**
     * Default `time_to_live` option value is 4 weeks (it is also the maximum TTL allowed for FCM).
     * In seconds it is 60 seconds * 60 minutes * 24 hours * 28 days = 2419200 seconds.
     */
    const DEFAULT_IN_SECONDS = 2419200;
}
