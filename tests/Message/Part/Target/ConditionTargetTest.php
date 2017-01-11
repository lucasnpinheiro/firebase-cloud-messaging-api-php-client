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

use Fresh\FirebaseCloudMessaging\Message\Part\Target\ConditionTarget;
use Fresh\FirebaseCloudMessaging\Message\Part\Target\TargetInterface;

/**
 * ConditionTargetTest.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class ConditionTargetTest extends \PHPUnit_Framework_TestCase
{
    public function testObjectCreation()
    {
        $conditionTarget = new ConditionTarget();
        $this->assertInstanceOf(TargetInterface::class, $conditionTarget);
        $this->assertNull($conditionTarget->getCondition());
    }

    public function testSetGetCondition()
    {
        $condition = "'dogs' in topics || 'cats' in topics";
        $conditionTarget = (new ConditionTarget())->setCondition($condition);
        $this->assertSame($condition, $conditionTarget->getCondition());
    }
}
