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
use Fresh\FirebaseCloudMessaging\Message\Part\Options\OptionsFactory;
use Fresh\FirebaseCloudMessaging\Message\Part\Options\Priority;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\PayloadFactory;
use Fresh\FirebaseCloudMessaging\Message\Part\Target\TargetFactory;

/**
 * ClientTest.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    /** @var Client */
    private $client;

    protected function setUp()
    {
        $this->client = new Client(1234567890, 'server key');
    }

    protected function tearDown()
    {
        unset($this->client);
    }

    public function testConstructor()
    {
        $message = MessageFactory::createAndroidMessage()
                    ->setTarget(
                        TargetFactory::createSingleRecipientTarget()
                            ->setRegistrationToken('token')
                    )
                    ->setOptions(
                        OptionsFactory::createOptions()
                            ->setPriority(Priority::HIGH)->setTimeToLive(123)
                    )
                    ->setPayload(PayloadFactory::createCombinedPayload()
                        ->setDataPayload(PayloadFactory::createDataPayload()->setData(['yo' => 'wazzup']))
                        ->setNotificationPayload(PayloadFactory::createNotificationIosPayload()->setTitle('hello')->setBody('world'))
                    );

        $this->client->sendMessage($message);
    }
}
