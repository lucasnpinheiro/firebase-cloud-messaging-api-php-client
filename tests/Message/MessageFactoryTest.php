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

use Fresh\FirebaseCloudMessaging\Message\MessageFactory;
use Fresh\FirebaseCloudMessaging\Message\Type\AndroidMessage;
use Fresh\FirebaseCloudMessaging\Message\Type\IosMessage;
use Fresh\FirebaseCloudMessaging\Message\Type\WebMessage;

/**
 * MessageFactoryTest.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class MessageFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testMethodCreateAndroidMessage()
    {
        $this->assertInstanceOf(AndroidMessage::class, MessageFactory::createAndroidMessage());
    }

    public function testMethodCreateIosMessage()
    {
        $this->assertInstanceOf(IosMessage::class, MessageFactory::createIosMessage());
    }

    public function testMethodCreateWebMessage()
    {
        $this->assertInstanceOf(WebMessage::class, MessageFactory::createWebMessage());
    }
}
