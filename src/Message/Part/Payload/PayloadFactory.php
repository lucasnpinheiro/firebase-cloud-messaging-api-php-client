<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Message\Part\Payload;

use Fresh\FirebaseCloudMessaging\Message\Part\Payload\Combined\CombinedCommonPayload;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\Data\DataCommonPayload;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\Notification\AndroidNotificationPayload;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\Notification\IosNotificationPayload;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\Notification\WebNotificationPayload;

/**
 * PayloadFactory.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class PayloadFactory
{
    /**
     * @return CombinedCommonPayload
     */
    public static function createCombinedPayload()
    {
        return new CombinedCommonPayload();
    }

    /**
     * @return DataCommonPayload
     */
    public static function createDataPayload()
    {
        return new DataCommonPayload();
    }

    /**
     * @return AndroidNotificationPayload
     */
    public static function createNotificationAndroidPayload()
    {
        return new AndroidNotificationPayload();
    }

    /**
     * @return IosNotificationPayload
     */
    public static function createNotificationIosPayload()
    {
        return new IosNotificationPayload();
    }

    /**
     * @return WebNotificationPayload
     */
    public static function createNotificationWebPayload()
    {
        return new WebNotificationPayload();
    }
}
