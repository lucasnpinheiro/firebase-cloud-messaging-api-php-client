<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging;

use GuzzleHttp\Client as GuzzleClient;

/**
 * Class HttpClient.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
final class HttpClient extends GuzzleClient
{
    const DEFAULT_ENDPOINT = 'https://fcm.googleapis.com/fcm/send';
    const DEFAULT_GUZZLE_TIMEOUT = 50;

    /**
     * @param string $serverKey
     * @param string $endpoint
     * @param int    $guzzleTimeOut
     */
    public function __construct(
        $serverKey,
        $endpoint = self::DEFAULT_ENDPOINT,
        $guzzleTimeOut = self::DEFAULT_GUZZLE_TIMEOUT
    ) {
        $options = [
            'base_uri' => rtrim($endpoint, '/'),
            'timeout' => $guzzleTimeOut,
            'http_errors' => false,
            'headers' => [
                'Authorization' => sprintf('key=%s', $serverKey),
                'Content-Type' => 'application/json',
            ],
        ];

        parent::__construct($options);
    }
}
