<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Message\Builder;

use Fresh\FirebaseCloudMessaging\Message\Builder\Payload\AndroidPayloadBuilder;
use Fresh\FirebaseCloudMessaging\Message\Builder\Payload\IosPayloadBuilder;
use Fresh\FirebaseCloudMessaging\Message\Builder\Payload\WebPayloadBuilder;
use Fresh\FirebaseCloudMessaging\Message\Part\Options\Options;
use Fresh\FirebaseCloudMessaging\Message\Part\Options\Priority;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\Notification\AndroidNotificationPayload;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\Notification\IosNotificationPayload;
use Fresh\FirebaseCloudMessaging\Message\Part\Payload\Notification\WebNotificationPayload;
use Fresh\FirebaseCloudMessaging\Message\Part\Target;
use Fresh\FirebaseCloudMessaging\Message\Type\MessageInterface;

/**
 * MessageBuilder.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 *
 * @todo Add validation while building message
 */
class MessageBuilder
{
    /** @var MessageInterface */
    private $message;

    /** @var array */
    private $targetPart = [];

    /** @var array */
    private $optionsPart = [];

    /** @var array */
    private $payloadPart = [];

    /**
     * @param MessageInterface $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * {@inheritdoc}
     */
    public function getMessageParts()
    {
        $this->buildTargetPart();
        $this->buildOptionsPart();
        $this->buildPayloadPart();

        return array_merge(
            $this->targetPart,
            $this->optionsPart,
            $this->payloadPart
        );
    }

    /**
     * @return string
     */
    public function getMessageAsJson()
    {
        return json_encode($this->getMessageParts(), true);
    }

    /**
     * {@inheritdoc}
     */
    private function buildTargetPart()
    {
        $target = $this->message->getTarget();

        if ($target instanceof Target\ConditionTarget) {
            $this->targetPart = ['condition' => $target->getCondition()];
        } elseif ($target instanceof Target\MulticastTarget) {
            $this->targetPart = ['registration_ids' => $target->getRegistrationTokens()];
        } elseif ($target instanceof Target\SingleRecipientTarget) {
            $this->targetPart = ['to' => $target->getRegistrationToken()];
        } else {
            throw new \InvalidArgumentException('Unsupported target part');
        }
    }

    /**
     * {@inheritdoc}
     */
    private function buildOptionsPart()
    {
        $options = $this->message->getOptions();
        $this->optionsPart = [];

        if (!empty($options->getCollapseKey())) {
            $this->optionsPart['collapse_key'] = (string) $options->getCollapseKey();
        }

        // By default, messages are sent with normal priority.
        // If priority is different add it to the set of options.
        if (Priority::NORMAL !== $options->getPriority()) {
            $this->optionsPart['priority'] = (string) $options->getPriority();
        }

        // By default `content_available` option is false. Adding it only if it was changed to true.
        if ($options->isContentAvailable()) {
            $this->optionsPart['content_available'] = true;
        }

        // By default TTL for message in FCM is 4 weeks, it is also the default value if you omitted the TTL option.
        // So if the TTL is overwritten and is not equal to the default value, then add this option.
        // Otherwise if TTL is still equal to default, then it is not need to send this option.
        if (Options::DEFAULT_TTL_IN_SECONDS !== $options->getTimeToLive()) {
            $this->optionsPart['time_to_live'] = $options->getTimeToLive();
        }

        if (!empty($options->getRestrictedPackageName())) {
            $this->optionsPart['restricted_package_name'] = (string) $options->getRestrictedPackageName();
        }

        // By default `dry_run` option is.... @todo
        if ($options->isDryRun()) {
            $this->optionsPart['dry_run'] = true;
        }
    }

    /**
     * {@inheritdoc}
     */
    private function buildPayloadPart()
    {
        $payload = $this->message->getPayload();

        if ($payload instanceof AndroidNotificationPayload) {
            $payloadBuilder = new AndroidPayloadBuilder($payload);
        } elseif ($payload instanceof IosNotificationPayload) {
            $payloadBuilder = new IosPayloadBuilder($payload);
        } elseif ($payload instanceof WebNotificationPayload) {
            $payloadBuilder = new WebPayloadBuilder($payload);
        } else {
            throw new \InvalidArgumentException('Unsupported payload part');
        }

        $this->payloadPart = $payloadBuilder->build()->getPayload();
    }
}
