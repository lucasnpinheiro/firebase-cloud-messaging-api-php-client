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

use Fresh\FirebaseCloudMessaging\Message\Type;

/**
 * Class MessageFactory.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class MessageFactory
{
    /**
     * @return Type\WebMessage
     */
    public static function createWebMessage()
    {
        return new Type\WebMessage();
    }

    /**
     * @return Type\AndroidMessage
     */
    public static function createAndroidMessage()
    {
        return new Type\AndroidMessage();
    }

    /**
     * @return Type\IosMessage
     */
    public static function createIosMessage()
    {
        return new Type\IosMessage();
    }
}
