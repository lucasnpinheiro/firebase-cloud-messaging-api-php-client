<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Fresh\FirebaseCloudMessaging\Message\Type;

use Fresh\FirebaseCloudMessaging\Message\Part\Options\Options;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\Notification\AndroidNotificationPayload;
use Fresh\FirebaseCloudMessaging\Message\Part\Target\MulticastTarget;
use Fresh\FirebaseCloudMessaging\Message\Type\AbstractMessage;
use Fresh\FirebaseCloudMessaging\Message\Type\AndroidMessage;

/**
 * AndroidMessageTest.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class AndroidMessageTest extends \PHPUnit_Framework_TestCase
{
    public function testObjectCreation()
    {
        $androidMessage = new AndroidMessage();
        $this->assertInstanceOf(AbstractMessage::class, $androidMessage);
        $this->assertNull($androidMessage->getTarget());
        $this->assertNull($androidMessage->getOptions());
        $this->assertNull($androidMessage->getPayload());
    }

    public function testSetGetTarget()
    {
        $target = new MulticastTarget();
        $androidMessage = (new AndroidMessage())->setTarget($target);
        $this->assertSame($target, $androidMessage->getTarget());
    }

    public function testSetGetOptions()
    {
        $options = new Options();
        $androidMessage = (new AndroidMessage())->setOptions($options);
        $this->assertSame($options, $androidMessage->getOptions());
    }

    public function testSetGetPayload()
    {
        $payload = new AndroidNotificationPayload();
        $androidMessage = (new AndroidMessage())->setPayload($payload);
        $this->assertSame($payload, $androidMessage->getPayload());
    }
}
