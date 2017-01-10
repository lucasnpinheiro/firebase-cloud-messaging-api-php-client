<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Fresh\FirebaseCloudMessaging;

use Fresh\FirebaseCloudMessaging\Client;
use Fresh\FirebaseCloudMessaging\Message\MessageFactory;
use Fresh\FirebaseCloudMessaging\Message\Part\Options\Options;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\Notification\AndroidNotificationPayload;
use Fresh\FirebaseCloudMessaging\Message\Part\Target\TargetFactory;

/**
 * ClientTest.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $client = new Client(1234567890, 'server key');

        $androidPayload = (new AndroidNotificationPayload())
            ->setTitle('sdfs')
            ->setTag('');

        $options = (new Options())->setTimeToLive(123);

        $message = MessageFactory::createAndroidMessage()
                                 ->setTarget(TargetFactory::createMulticastTarget()->addRegistrationToken('yo'))
                                 ->setOptions($options)
                                 ->setPayload($androidPayload);

        $client->sendMessage($message);
    }
}
