<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Message;

use Fresh\FirebaseCloudMessaging\Message\Type\AndroidMessage;
use Fresh\FirebaseCloudMessaging\Message\Type\IosMessage;
use Fresh\FirebaseCloudMessaging\Message\Type\WebMessage;

/**
 * Class MessageFactory.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class MessageFactory
{
    /**
     * @return WebMessage
     */
    public static function createWebMessage()
    {
        return new WebMessage();
    }

    /**
     * @return AndroidMessage
     */
    public static function createAndroidMessage()
    {
        return new AndroidMessage();
    }

    /**
     * @return IosMessage
     */
    public static function createIosMessage()
    {
        return new IosMessage();
    }
}
