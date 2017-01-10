<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Fresh\FirebaseCloudMessaging\Event;

use Fresh\FirebaseCloudMessaging\Event\TopicMessageResponseEvent;

/**
 * TopicMessageResponseEventTest.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class TopicMessageResponseEventTest extends \PHPUnit_Framework_TestCase
{
    public function testObjectCreation()
    {
        $messageId = 123;
        $error = 'Missing Registration Token';

        $event = new TopicMessageResponseEvent($messageId, $error);
        $this->assertSame($messageId, $event->getMessageId());
        $this->assertSame($error, $event->getError());
    }
}
