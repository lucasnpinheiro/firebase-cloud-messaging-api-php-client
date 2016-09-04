<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\Fcm\Message\Builder;

use Fresh\Fcm\Message\Parameters\Options\OptionsInterface;
use Fresh\Fcm\Message\Parameters\Options\Priority;
use Fresh\Fcm\Message\Parameters\Options\TTL;
use Fresh\Fcm\Message\Parameters\Target\ConditionTarget;
use Fresh\Fcm\Message\Parameters\Target\MulticastTarget;
use Fresh\Fcm\Message\Parameters\Target\SingleRecipientTarget;
use Fresh\Fcm\Message\Parameters\Target\TargetInterface;
use Fresh\Fcm\Message\Type\MessageInterface;

/**
 * AbstractMessageBuilder.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
abstract class AbstractMessageBuilder implements MessageBuilderInterface
{
    /**
     * @var array $targetPart Target part of a message.
     */
    protected $targetPart = [];

    /**
     * @var array $optionsPart Options part of a message.
     */
    protected $optionsPart = [];

    /**
     * @var array $payloadPart Payload part of a message.
     */
    protected $payloadPart = [];

    /**
     * {@inheritdoc}
     */
    public function buildTargetPart(TargetInterface $target)
    {
        if ($target instanceof ConditionTarget) {
            $this->targetPart = [
                'condition' => $target->getCondition(),
            ];
        } elseif ($target instanceof MulticastTarget) {
            $this->targetPart = [
                'registration_ids' => $target->getRegistrationTokens(),
            ];
        } elseif ($target instanceof SingleRecipientTarget) {
            $this->targetPart = [
                'to' => $target->getRegistrationToken(),
            ];
        } else {
            throw new \Exception();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function buildOptionsPart(OptionsInterface $options)
    {
        $optionsPart = [];

        // TODO
        if (!empty($options->getCollapseKey())) {
            $optionsPart['collapse_key'] = $options->getCollapseKey();
        }

        // By default, messages are sent with normal priority.
        // If priority is different add it to the set of options.
        if ($options->getPriority() !== Priority::NORMAL) {
            $optionsPart['priority'] = $options->getPriority();
        }

        // By default `content_available` option is false. Adding it only if it was changed to true.
        if ($options->isContentAvailable()) {
            $optionsPart['content_available'] = true;
        }

        // By default `delay_while_idle` option is false. Adding it only if it was changed to true.
        if ($options->isDelayWithIdle()) {
            $optionsPart['delay_while_idle'] = true;
        }

        // By default TTL for message in FCM is 4 weeks, it is also the default value if you omitted the TTL option.
        // So if the TTL is overwritten and is not equal to the default value, then add this option.
        // Otherwise if TTL is still equal to default, then it is not need to send this option.
        if (TTL::DEFAULT_IN_SECONDS !== $options->getTTL()) {
            $optionsPart['time_to_live'] = (string) $options->getTTL();
        }

        if (!empty($options->getRestrictedPackageName())) {
            $optionsPart['restricted_package_name'] = $options->getRestrictedPackageName();
        }

        // By default `dry_run` option is....
        if ($options->isDryRun()) {
            $optionsPart['dry_run'] = true;
        }

        $this->optionsPart = $optionsPart;
    }

    public function getMessage(): MessageInterface
    {
        return array_merge($this->targetPart, $this->optionsPart, $this->payloadPart);
    }
}
