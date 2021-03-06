<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Fresh\FirebaseCloudMessaging\Message\Builder\Payload;

use Fresh\FirebaseCloudMessaging\Message\Builder\Payload\AbstractPayloadBuilder;
use Fresh\FirebaseCloudMessaging\Message\Builder\Payload\PayloadBuilderInterface;
use Fresh\FirebaseCloudMessaging\Message\Builder\Payload\WebPayloadBuilder;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\Notification\WebNotificationPayload;

/**
 * WebPayloadBuilderTest.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class WebPayloadBuilderTest extends \PHPUnit_Framework_TestCase
{
    public function testObjectCreation()
    {
        $webNotificationPayload = new WebNotificationPayload();
        $builder = new WebPayloadBuilder($webNotificationPayload);
        $this->assertInstanceOf(AbstractPayloadBuilder::class, $builder);
        $this->assertInstanceOf(PayloadBuilderInterface::class, $builder);
    }

    public function testGetEmptyPayloadPartWithoutCallingBuildMethod()
    {
        $webNotificationPayload = new WebNotificationPayload();
        $builder = new WebPayloadBuilder($webNotificationPayload);
        $this->assertSame([], $builder->getPayloadPart());
    }

    public function testGetEmptyPayloadPartWithCallingBuildMethod()
    {
        $webNotificationPayload = new WebNotificationPayload();
        $builder = new WebPayloadBuilder($webNotificationPayload);
        $builder->build();
        $this->assertSame([], $builder->getPayloadPart());
    }

    public function testGetPayloadPartWithAllFields()
    {
        $webNotificationPayload = (new WebNotificationPayload())
            ->setTitle('hello world')
            ->setBody('body')
            ->setClickAction('some_click_action')
            ->setIcon('star');

        $builder = new WebPayloadBuilder($webNotificationPayload);
        $builder->build();
        $expected = [
            'title' => 'hello world',
            'body' => 'body',
            'icon' => 'star',
            'click_action' => 'some_click_action',
        ];
        $this->assertEquals($expected, $builder->getPayloadPart());
    }

    public function testGetPayloadPartWithSomeFields()
    {
        $webNotificationPayload = (new WebNotificationPayload())
            ->setTitle('hello world')
            ->setBody('body');

        $builder = new WebPayloadBuilder($webNotificationPayload);
        $builder->build();
        $expected = [
            'title' => 'hello world',
            'body' => 'body',
        ];
        $this->assertEquals($expected, $builder->getPayloadPart());
    }
}
