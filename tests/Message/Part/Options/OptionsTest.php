<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Fresh\FirebaseCloudMessaging\Message\Part\Options;

use Fresh\FirebaseCloudMessaging\Message\Part\Options\Options;
use Fresh\FirebaseCloudMessaging\Message\Part\Options\OptionsInterface;
use Fresh\FirebaseCloudMessaging\Message\Part\Options\Priority;

/**
 * OptionsTest.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class OptionsTest extends \PHPUnit_Framework_TestCase
{
    public function testObjectCreation()
    {
        $options = new Options();
        $this->assertInstanceOf(OptionsInterface::class, $options);
        $this->assertEmpty($options->getCollapseKey());
        $this->assertSame(Priority::NORMAL, $options->getPriority());
        $this->assertFalse($options->isContentAvailable());
        $this->assertSame(Options::DEFAULT_TTL_IN_SECONDS, $options->getTimeToLive());
        $this->assertEmpty($options->getRestrictedPackageName());
        $this->assertFalse($options->isDryRun());
    }

    public function testSetGetCollapseKey()
    {
        $collapseKey = 'test';
        $options = (new Options())->setCollapseKey($collapseKey);
        $this->assertSame($collapseKey, $options->getCollapseKey());
    }

    public function testSetGetPriority()
    {
        $options = (new Options())->setPriority(Priority::HIGH);
        $this->assertSame(Priority::HIGH, $options->getPriority());
    }

    public function testSetIsContentAvailable()
    {
        $options = (new Options())->setContentAvailable(true);
        $this->assertTrue($options->isContentAvailable());
        $options->setContentAvailable(false);
        $this->assertFalse($options->isContentAvailable());
    }

    public function testSetGetTimeToLive()
    {
        $ttl = 1234567890;
        $options = (new Options())->setTimeToLive($ttl);
        $this->assertSame($ttl, $options->getTimeToLive());
    }

    public function testSetGetRestrictedPackageName()
    {
        $restrictedPackageName = 'test';
        $options = (new Options())->setRestrictedPackageName($restrictedPackageName);
        $this->assertSame($restrictedPackageName, $options->getRestrictedPackageName());
    }

    public function testSetIsDryRun()
    {
        $options = (new Options())->setDryRun(true);
        $this->assertTrue($options->isDryRun());
        $options->setDryRun(false);
        $this->assertFalse($options->isDryRun());
    }
}
