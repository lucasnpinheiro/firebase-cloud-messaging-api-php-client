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
use Fresh\FirebaseCloudMessaging\Message\Part\Options\OptionsFactory;

/**
 * OptionsFactoryTest.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class OptionsFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testMethodCreateOptions()
    {
        $this->assertInstanceOf(Options::class, OptionsFactory::createOptions());
    }
}
