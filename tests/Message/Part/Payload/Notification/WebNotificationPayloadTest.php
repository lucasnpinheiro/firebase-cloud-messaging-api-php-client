<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Fresh\FirebaseCloudMessaging\Message\Part\Payload\Notification;

use Fresh\FirebaseCloudMessaging\Message\Part\Payload\Notification\AbstractCommonNotificationPayload;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\Notification\WebNotificationPayload;

/**
 * WebNotificationPayloadTest.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class WebNotificationPayloadTest extends \PHPUnit_Framework_TestCase
{
    public function testObjectCreation()
    {
        $webNotificationPayload = new WebNotificationPayload();
        $this->assertInstanceOf(AbstractCommonNotificationPayload::class, $webNotificationPayload);
        $this->assertEmpty($webNotificationPayload->getBody());
        $this->assertEmpty($webNotificationPayload->getClickAction());
        $this->assertEmpty($webNotificationPayload->getIcon());
        $this->assertEmpty($webNotificationPayload->getTitle());
    }

    public function setGetBody()
    {
        $body = 'test';
        $webNotificationPayload = (new WebNotificationPayload())->setBody($body);
        $this->assertSame($body, $webNotificationPayload->getBody());
    }

    public function setGetClickAction()
    {
        $clickAction = 'test';
        $webNotificationPayload = (new WebNotificationPayload())->setClickAction($clickAction);
        $this->assertSame($clickAction, $webNotificationPayload->getClickAction());
    }

    public function setGetIcon()
    {
        $icon = 'test';
        $webNotificationPayload = (new WebNotificationPayload())->setIcon($icon);
        $this->assertSame($icon, $webNotificationPayload->getIcon());
    }

    public function setGetTitle()
    {
        $title = 'test';
        $webNotificationPayload = (new WebNotificationPayload())->setTitle($title);
        $this->assertSame($title, $webNotificationPayload->getTitle());
    }
}
