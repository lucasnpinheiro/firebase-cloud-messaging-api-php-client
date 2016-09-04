<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\Fcm\Message\Parameters\Target;

/**
 * Class ConditionTarget.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class ConditionTarget implements TargetInterface
{
    /**
     * @var string $condition Condition
     */
    private $condition;

    /**
     * Set condition.
     *
     * @param string $condition Condition
     */
    public function setCondition(string $condition)
    {
        $this->condition = $condition;
    }

    /**
     * Get condition.
     *
     * @return string
     */
    public function getCondition(): string
    {
        return $this->condition;
    }
}
