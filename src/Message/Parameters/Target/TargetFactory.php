<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\Fcm\Message\Parameters\Target;

/**
 * TargetFactory.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class TargetFactory
{
    /**
     * Create... TODO
     *
     * @return SingleRecipientTarget
     */
    public static function createSingleRecipientTarget()
    {
        return new SingleRecipientTarget();
    }

    /**
     * Create a target to send a message to more than 1 registration token.
     *
     * @return MulticastTarget
     */
    public static function createMulticastTarget()
    {
        return new MulticastTarget();
    }

    /**
     * Create a target to send a message to more than 1 registration token.
     *
     * This parameter specifies a logical expression of conditions that determine the message target.
     *
     * @return ConditionTarget
     */
    public static function createConditionTarget()
    {
        return new ConditionTarget();
    }
}
