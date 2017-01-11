<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Message\Part\Target;

/**
 * TargetFactory.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class TargetFactory
{
    /**
     * @todo Find better name for method and class
     *
     * @return SingleRecipientTarget
     */
    public static function createSingleRecipientTarget()
    {
        return new SingleRecipientTarget();
    }

    /**
     * @return MulticastTarget
     */
    public static function createMulticastTarget()
    {
        return new MulticastTarget();
    }

    /**
     * @return ConditionTarget
     */
    public static function createConditionTarget()
    {
        return new ConditionTarget();
    }
}
