<?php
/*
 * This file is part of the Firebase Cloud Messaging API Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\FirebaseCloudMessaging\Response\MessageResult\Collection;

/**
 * Class AbstractMessageResultCollection.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
abstract class AbstractMessageResultCollection implements \Iterator
{
    /** @var array */
    protected $messageResults;

    /**
     * {@inheritdoc}
     */
    public function current()
    {
        return current($this->messageResults);
    }

    /**
     * {@inheritdoc}
     */
    public function next()
    {
        return next($this->messageResults);
    }

    /**
     * {@inheritdoc}
     */
    public function key()
    {
        return key($this->messageResults);
    }

    /**
     * {@inheritdoc}
     */
    public function valid()
    {
        $key = key($this->messageResults);

        return null !== $key && false !== $key;
    }

    /**
     * {@inheritdoc}
     */
    public function rewind()
    {
        reset($this->messageResults);
    }
}
