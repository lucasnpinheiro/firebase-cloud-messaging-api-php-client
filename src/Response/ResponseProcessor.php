<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Response;

use Fresh\FirebaseCloudMessaging\Exception\FirebaseAuthenticationException;
use Fresh\FirebaseCloudMessaging\Exception\FirebaseException;
use Fresh\FirebaseCloudMessaging\Exception\FirebaseInvalidJsonException;
use Fresh\FirebaseCloudMessaging\Exception\FirebaseUnsupportedResponseException;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ResponseProcessor.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class ResponseProcessor
{
    /** @var array */
    private $jsonContentTypes = [
        'application/json',
    ];

    /**
     * @param ResponseInterface $response
     *
     * @throws FirebaseException
     */
    public function processResponse(ResponseInterface $response)
    {
        if (Response::HTTP_OK === $response->getStatusCode()) {
            $result = $this->processHttpOkResponse($response);
        } elseif (Response::HTTP_BAD_REQUEST === $response->getStatusCode()) {
            throw new FirebaseInvalidJsonException();
        } elseif (Response::HTTP_UNAUTHORIZED === $response->getStatusCode()) {
            throw new FirebaseAuthenticationException();
        } elseif (Response::HTTP_INTERNAL_SERVER_ERROR === $response->getStatusCode()) {

        } else {
            throw new FirebaseUnsupportedResponseException();
        }

        return $result;
    }

    private function processHttpOkResponse(ResponseInterface $response)
    {
        $body = $this->getBodyAsArray($response);

        if (isset($body['error'])) {
            $this->processErrorOnHttpOkResponse($body);
        } else {

        }
    }

    private function processErrorOnHttpOkResponse(array $body)
    {

    }

    private function getBodyAsArray(ResponseInterface $response)
    {
        if ($this->responseHasContentTypeJson($response)) {
            $body = $response->getBody()->rewind();
            $result = json_decode($body, true);
        } else {
            throw new \Exception('Cannot decode response body');
        }

        return $result;
    }

    /**
     * @param ResponseInterface $response
     *
     * @return bool
     */
    private function responseHasContentTypeJson(ResponseInterface $response)
    {
        return $response->hasHeader('Content-Type') && in_array($response->getHeader('Content-Type')[0], $this->jsonContentTypes);
    }
}
