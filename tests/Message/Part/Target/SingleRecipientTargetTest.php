<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Fresh\FirebaseCloudMessaging\Message\Part\Payload;

use Fresh\FirebaseCloudMessaging\Message\Part\Target\SingleRecipientTarget;
use Fresh\FirebaseCloudMessaging\Message\Part\Target\TargetInterface;

/**
 * SingleRecipientTargetTest.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class SingleRecipientTargetTest extends \PHPUnit_Framework_TestCase
{
    public function testObjectCreation()
    {
        $singleRecipientTarget = new SingleRecipientTarget();
        $this->assertInstanceOf(TargetInterface::class, $singleRecipientTarget);
        $this->assertEmpty($singleRecipientTarget->getRegistrationToken());
    }

    public function testSetGetCondition()
    {
        $token = 'token';
        $singleRecipientTarget = (new SingleRecipientTarget())->setRegistrationToken($token);
        $this->assertSame($token, $singleRecipientTarget->getRegistrationToken());
    }
}
