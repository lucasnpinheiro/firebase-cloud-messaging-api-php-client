<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\Fcm\Message;

use Fresh\Fcm\Message\Type\AndroidMessage;
use Fresh\Fcm\Message\Type\IosMessage;
use Fresh\Fcm\Message\Type\SimpleMessage;

/**
 * Class MessageFactory.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class MessageFactory
{
    /**
     * Create simple message.
     *
     * @return SimpleMessage
     */
    public static function createSimpleMessage(): SimpleMessage
    {
        return new SimpleMessage();
    }

    /**
     * Create message for Android.
     *
     * @return AndroidMessage
     */
    public static function createAndroidMessage(): AndroidMessage
    {
        return new AndroidMessage();
    }

    /**
     * Create message for iOS.
     *
     * @return IosMessage
     */
    public static function createIosMessage(): IosMessage
    {
        return new IosMessage();
    }
}
