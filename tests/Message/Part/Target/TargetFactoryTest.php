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

use Fresh\FirebaseCloudMessaging\Message\Part\Target\ConditionTarget;
use Fresh\FirebaseCloudMessaging\Message\Part\Target\MulticastTarget;
use Fresh\FirebaseCloudMessaging\Message\Part\Target\SingleRecipientTarget;
use Fresh\FirebaseCloudMessaging\Message\Part\Target\TargetFactory;

/**
 * TargetFactoryTest.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class TargetFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testMethodCreateConditionTarget()
    {
        $this->assertInstanceOf(ConditionTarget::class, TargetFactory::createConditionTarget());
    }

    public function testMethodCreateMulticastTarget()
    {
        $this->assertInstanceOf(MulticastTarget::class, TargetFactory::createMulticastTarget());
    }

    public function testMethodCreateRecipientTarget()
    {
        $this->assertInstanceOf(SingleRecipientTarget::class, TargetFactory::createSingleRecipientTarget());
    }
}
