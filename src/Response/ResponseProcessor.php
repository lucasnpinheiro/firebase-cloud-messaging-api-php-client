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
use Fresh\FirebaseCloudMessaging\Exception\FirebaseExceptionInterface;
use Fresh\FirebaseCloudMessaging\Exception\FirebaseInternalServerErrorException;
use Fresh\FirebaseCloudMessaging\Exception\FirebaseInvalidJsonException;
use Fresh\FirebaseCloudMessaging\Exception\FirebaseUnsupportedResponseException;
use Fresh\FirebaseCloudMessaging\Message\Part\Target\TokenTargetInterface;
use Fresh\FirebaseCloudMessaging\Message\Type\AbstractMessage;
use Fresh\FirebaseCloudMessaging\Response\MessageResult\CanonicalTokenMessageResult;
use Fresh\FirebaseCloudMessaging\Response\MessageResult\Collection\CanonicalTokenMessageResultCollection;
use Fresh\FirebaseCloudMessaging\Response\MessageResult\Collection\FailedMessageResultCollection;
use Fresh\FirebaseCloudMessaging\Response\MessageResult\Collection\SuccessfulMessageResultCollection;
use Fresh\FirebaseCloudMessaging\Response\MessageResult\FailedMessageResult;
use Fresh\FirebaseCloudMessaging\Response\MessageResult\SuccessfulMessageResult;
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
        'application/json; charset=UTF-8',
    ];

    /** @var AbstractMessage */
    private $message;

    /**
     * @param AbstractMessage   $message
     * @param ResponseInterface $response
     *
     * @throws FirebaseExceptionInterface
     *
     * @return FirebaseResponseInterface
     */
    public function processResponse(AbstractMessage $message, ResponseInterface $response)
    {
        $this->message = $message;

        if (Response::HTTP_OK === $response->getStatusCode()) {
            $result = $this->processHttpOkResponse($response);
        } elseif (Response::HTTP_BAD_REQUEST === $response->getStatusCode()) {
            throw new FirebaseInvalidJsonException();
        } elseif (Response::HTTP_UNAUTHORIZED === $response->getStatusCode()) {
            throw new FirebaseAuthenticationException();
        } elseif (Response::HTTP_INTERNAL_SERVER_ERROR === $response->getStatusCode()) {
            throw new FirebaseInternalServerErrorException();
        } else {
            throw new FirebaseUnsupportedResponseException();
        }

        return $result;
    }

    /**
     * @param ResponseInterface $response
     *
     * @return FirebaseResponseInterface
     */
    private function processHttpOkResponse(ResponseInterface $response)
    {
        $body = $this->getBodyAsArray($response);

        if (isset($body['error'])) {
            $response = $this->processHttpOkResponseWithError($body);
        } else {
            $response = $this->processHttpOkResponseWithoutError($body);
        }

        return $response;
    }

    /**
     * @param array $body
     *
     * @return MulticastMessageResponse
     */
    private function processHttpOkResponseWithoutError(array $body)
    {
        $successfulMessageResults = new SuccessfulMessageResultCollection();
        $failedMessageResults = new FailedMessageResultCollection();
        $canonicalTokenMessageResults = new CanonicalTokenMessageResultCollection();

        if ($this->message->getTarget() instanceof TokenTargetInterface) {
            $numberOfSequentialSentTokens = $this->message->getTarget()->getNumberOfSequentialSentTokens();

            if (isset($body['results']) && $numberOfSequentialSentTokens !== count($body['results'])) {
                throw new \Exception('Mismatch number of sent tokens and results');
            }

            for ($i = 0; $i < $numberOfSequentialSentTokens; $i++) {
                $currentToken = $this->message->getTarget()->getSequentialSentTokens()[$i];
                $currentResult = $body['results'][$i];

                if (isset($currentResult['error'])) {
                    $messageResult = (new FailedMessageResult())
                        ->setError($currentResult['error']);

                    $failedMessageResults[] = $messageResult;
                } elseif (isset($currentResult['registration_id'])) {
                    $messageResult = (new CanonicalTokenMessageResult())
                        ->setCanonicalToken($currentResult['registration_id']);

                    $canonicalTokenMessageResults[] = $messageResult;
                } else {
                    $messageResult = new SuccessfulMessageResult();
                    $successfulMessageResults[] = $messageResult;
                }

                $messageResult->setToken($currentToken)
                              ->setMessageId($currentResult['message_id']);
            }
        }

        return (new MulticastMessageResponse())
            ->setMulticastId($body['multicast_id'])
            ->setSuccessfulMessageResults($successfulMessageResults)
            ->setFailedMessageResults($failedMessageResults)
            ->setCanonicalTokenMessageResults($canonicalTokenMessageResults);
    }

    private function processHttpOkResponseWithError(array $body)
    {
        // @todo finish it
    }

    /**
     * @param ResponseInterface $response
     *
     * @throws \InvalidArgumentException
     *
     * @return array
     */
    private function getBodyAsArray(ResponseInterface $response)
    {
        if ($this->responseContentTypeIsJson($response)) {
            $response->getBody()->rewind();
            $body = null;

            if ($response->getBody()->getSize() > 0) {
                $body = $response->getBody()->getContents();
            }
            $result = json_decode($body, true);
        } else {
            throw new \InvalidArgumentException('Response from Firebase Cloud Messaging is not a JSON');
        }

        return $result;
    }

    /**
     * @param ResponseInterface $response
     *
     * @return bool
     */
    private function responseContentTypeIsJson(ResponseInterface $response)
    {
        return $response->hasHeader('Content-Type')
               && in_array($response->getHeader('Content-Type')[0], $this->jsonContentTypes);
    }
}
