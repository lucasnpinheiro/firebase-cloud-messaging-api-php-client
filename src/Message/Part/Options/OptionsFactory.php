<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Message\Part\Options;

/**
 * OptionsFactory.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class OptionsFactory
{
    /**
     * @return Options
     */
    public static function createOptions()
    {
        return new Options();
    }
}
