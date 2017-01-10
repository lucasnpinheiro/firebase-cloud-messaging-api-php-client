<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Message\Builder\Payload;

/**
 * AbstractPayloadBuilder.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
abstract class AbstractPayloadBuilder implements PayloadBuilderInterface
{
    /** @var PayloadBuilderInterface */
    protected $payload;

    /** @var array */
    protected $payloadPart;

    /**
     * {@inheritdoc}
     */
    public function getPayload()
    {
        return $this->payloadPart;
    }
}
