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

use Fresh\FirebaseCloudMessaging\Message\Part\Options\Options;
use Fresh\FirebaseCloudMessaging\Message\Part\Options\OptionsInterface;
use Fresh\FirebaseCloudMessaging\Message\Part\Options\Priority;
use Fresh\FirebaseCloudMessaging\Message\Part\Target;

/**
 * AbstractMessageBuilder.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
abstract class AbstractMessageBuilder implements MessageBuilderInterface
{
    /** @var array */
    protected $targetPart = [];

    /** @var array */
    protected $optionsPart = [];

    /** @var array */
    protected $payloadPart = [];

    /**
     * {@inheritdoc}
     */
    public function buildTargetPart(Target\TargetInterface $target)
    {
        if ($target instanceof Target\ConditionTarget) {
            $this->targetPart = [
                'condition' => $target->getCondition(),
            ];
        } elseif ($target instanceof Target\MulticastTarget) {
            $this->targetPart = [
                'registration_ids' => $target->getRegistrationTokens(),
            ];
        } elseif ($target instanceof Target\SingleRecipientTarget) {
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

        // By default TTL for message in FCM is 4 weeks, it is also the default value if you omitted the TTL option.
        // So if the TTL is overwritten and is not equal to the default value, then add this option.
        // Otherwise if TTL is still equal to default, then it is not need to send this option.
        if (Options::DEFAULT_TTL_IN_SECONDS !== $options->getTimeToLive()) {
            $optionsPart['time_to_live'] = (string) $options->getTimeToLive();
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

    /**
     * {@inheritdoc}
     */
    public function getMessage()
    {
        return array_merge(
            $this->targetPart,
            $this->optionsPart,
            $this->payloadPart
        );
    }
}
