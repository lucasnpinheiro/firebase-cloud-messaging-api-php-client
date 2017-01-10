<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Event;

/**
 * FirebaseEvents.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
final class FirebaseEvents
{
    /**
     * @see \Fresh\FirebaseCloudMessaging\Event\MulticastMessageResponseEvent Listeners receive an instance of this class
     */
    const MULTICAST_MESSAGE_RESPONSE_EVENT = 'firebase.multicast_message_response';

    /**
     * @see \Fresh\FirebaseCloudMessaging\Event\TopicMessageResponseEvent Listeners receive an instance of this class
     */
    const TOPIC_MESSAGE_RESPONSE_EVENT = 'firebase.topic_message_response';
}
