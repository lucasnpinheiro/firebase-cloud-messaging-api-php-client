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

use Fresh\FirebaseCloudMessaging\Message\Part\Payload\Combined\CombinedPayload;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\Data\DataPayload;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\Notification\AndroidNotificationPayload;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\Notification\IosNotificationPayload;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\Notification\WebNotificationPayload;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\PayloadFactory;

/**
 * PayloadFactoryTest.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class PayloadFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testMethodCreateCombinedPayload()
    {
        $this->assertInstanceOf(CombinedPayload::class, PayloadFactory::createCombinedPayload());
    }

    public function testMethodCreateDataPayload()
    {
        $this->assertInstanceOf(DataPayload::class, PayloadFactory::createDataPayload());
    }

    public function testMethodCreateNotificationAndroidPayload()
    {
        $this->assertInstanceOf(AndroidNotificationPayload::class, PayloadFactory::createNotificationAndroidPayload());
    }

    public function testMethodCreateNotificationIosPayload()
    {
        $this->assertInstanceOf(IosNotificationPayload::class, PayloadFactory::createNotificationIosPayload());
    }

    public function testMethodCreateNotificationWebPayload()
    {
        $this->assertInstanceOf(WebNotificationPayload::class, PayloadFactory::createNotificationWebPayload());
    }
}
