<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Fresh\FirebaseCloudMessaging\Message\Builder;

use Fresh\FirebaseCloudMessaging\Message\Builder\MessageBuilder;

/**
 * MessageBuilderTest.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class MessageBuilderTest extends \PHPUnit_Framework_TestCase
{
    public function testObjectCreation()
    {
        $builder = new MessageBuilder();
//        $this->assertEquals([], $builder->getMessagePartsAsArray());
//        $this->assertJsonStringEqualsJsonString('{}', $builder->getMessageAsJson());
    }
}
