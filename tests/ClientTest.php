<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Fresh\Fcm;

use Fresh\Fcm\Client;
use Fresh\Fcm\Message\MessageFactory;
use Fresh\Fcm\Message\Parameters\Options\Options;
use Fresh\Fcm\Message\Parameters\Payload\Notification\AndroidNotificationPayload;
use Fresh\Fcm\Message\Parameters\Target\TargetFactory;

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

        $options = (new Options())->setTTL(123);

        $message = MessageFactory::createAndroidMessage()
                                 ->setTarget(TargetFactory::createMulticastTarget()->addRegistrationToken('yo'))
                                 ->setOptions($options)
                                 ->setPayload($androidPayload);

        $client->sendMessage($message);


    }
}
