<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Response;

/**
 * Class FirebaseErrors.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
final class FirebaseErrors
{
    const MISSING_REGISTRATION_TOKEN = 'MissingRegistration';
    const INVALID_REGISTRATION_TOKEN = 'InvalidRegistration';
    const UNREGISTERED_DEVICE = 'NotRegistered';
    const INVALID_PACKAGE_NAME = 'InvalidPackageName';
    const MISMATCHED_SENDER = 'MismatchSenderId';
    const MESSAGE_TOO_BIG = 'MessageTooBig';
    const INVALID_DATA_KEY = 'InvalidDataKey';
    const INVALID_TIME_TO_LIVE = 'InvalidTtl';
    const TIMEOUT = 'Unavailable';
    const INTERVAL_SERVER_ERROR = 'InternalServerError';
    const DEVICE_MESSAGE_RATE_EXCEEDED = 'DeviceMessageRateExceeded';
    const TOPICS_MESSAGE_RATE_EXCEEDED = 'TopicsMessageRateExceeded';
}
