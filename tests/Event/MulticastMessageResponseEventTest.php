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

use Fresh\FirebaseCloudMessaging\Event\MulticastMessageResponseEvent;

/**
 * MulticastMessageResponseEventTest.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class MulticastMessageResponseEventTest extends \PHPUnit_Framework_TestCase
{
    public function testObjectCreation()
    {
        $multicastId = 123;
        $success = 1;
        $failure = 0;
        $canonicalIds = 1;
        $results = [];

        $event = new MulticastMessageResponseEvent($multicastId, $success, $failure, $canonicalIds, $results);
        $this->assertSame($multicastId, $event->getMulticastId());
        $this->assertSame($success, $event->getNumberOfSuccessMessages());
        $this->assertSame($failure, $event->getNumberOfFailedMessages());
        $this->assertSame($canonicalIds, $event->getNumberOfMessagesWithCanonicalRegistrationToken());
        $this->assertSame($results, $event->getResults());
    }
}
